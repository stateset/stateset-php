<?php

declare(strict_types=1);

namespace StateSet\Client\Helpers;

use OpenAPI\Client\Model\ModelReturn;
use OpenAPI\Client\Model\ReturnItem;
use StateSet\Client\StateSetClient;
use StateSet\Client\StateSetException;

/**
 * Helper class for returns operations
 * 
 * Provides common workflows and utilities for working with returns
 */
class ReturnsHelper
{
    private StateSetClient $client;

    public function __construct(StateSetClient $client)
    {
        $this->client = $client;
    }

    /**
     * Create a new return with validation
     */
    public function createReturn(array $returnData): ModelReturn
    {
        $this->validateReturnData($returnData);
        
        return $this->client->executeWithLogging(
            fn() => $this->client->returns()->createReturn($returnData),
            'create_return'
        );
    }

    /**
     * Get return by ID with error handling
     */
    public function getReturn(string $returnId): ModelReturn
    {
        if (empty($returnId)) {
            throw new StateSetException('Return ID cannot be empty');
        }
        
        return $this->client->executeWithLogging(
            fn() => $this->client->returns()->getReturnById($returnId),
            "get_return_{$returnId}"
        );
    }

    /**
     * Update return status
     */
    public function updateReturnStatus(string $returnId, string $status): ModelReturn
    {
        $validStatuses = ['pending', 'approved', 'rejected', 'completed'];
        
        if (!in_array($status, $validStatuses, true)) {
            throw new StateSetException("Invalid status: {$status}. Valid statuses: " . implode(', ', $validStatuses));
        }
        
        return $this->client->executeWithLogging(
            fn() => $this->client->returns()->updateReturn($returnId, ['status' => $status]),
            "update_return_status_{$returnId}"
        );
    }

    /**
     * Add items to a return
     */
    public function addItemsToReturn(string $returnId, array $items): array
    {
        $addedItems = [];
        
        foreach ($items as $item) {
            $this->validateReturnItemData($item);
            $item['return_id'] = $returnId;
            
            $addedItem = $this->client->executeWithLogging(
                fn() => $this->client->returnLineItems()->createReturnLineItem($item),
                "add_item_to_return_{$returnId}"
            );
            
            $addedItems[] = $addedItem;
        }
        
        return $addedItems;
    }

    /**
     * Get all items for a return
     */
    public function getReturnItems(string $returnId): array
    {
        return $this->client->executeWithLogging(
            fn() => $this->client->returnLineItems()->getReturnLineItemsByReturnId($returnId),
            "get_return_items_{$returnId}"
        );
    }

    /**
     * Calculate total refund amount for a return
     */
    public function calculateRefundAmount(string $returnId): float
    {
        $items = $this->getReturnItems($returnId);
        $total = 0.0;
        
        foreach ($items as $item) {
            if (isset($item['quantity']) && isset($item['unit_price'])) {
                $total += (float) $item['quantity'] * (float) $item['unit_price'];
            }
        }
        
        return $total;
    }

    /**
     * Process a return (approve and calculate refund)
     */
    public function processReturn(string $returnId): array
    {
        // Update status to approved
        $return = $this->updateReturnStatus($returnId, 'approved');
        
        // Calculate refund amount
        $refundAmount = $this->calculateRefundAmount($returnId);
        
        return [
            'return' => $return,
            'refund_amount' => $refundAmount,
            'status' => 'approved',
            'processed_at' => date('c'),
        ];
    }

    /**
     * Validate return data
     */
    private function validateReturnData(array $data): void
    {
        $required = ['customer_id', 'reason'];
        
        foreach ($required as $field) {
            if (!isset($data[$field]) || empty($data[$field])) {
                throw new StateSetException("Required field missing: {$field}");
            }
        }
    }

    /**
     * Validate return item data
     */
    private function validateReturnItemData(array $data): void
    {
        $required = ['product_id', 'quantity'];
        
        foreach ($required as $field) {
            if (!isset($data[$field])) {
                throw new StateSetException("Required field missing for return item: {$field}");
            }
        }
        
        if ((int) $data['quantity'] <= 0) {
            throw new StateSetException('Return item quantity must be greater than 0');
        }
    }
}