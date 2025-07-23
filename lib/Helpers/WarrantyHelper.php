<?php

declare(strict_types=1);

namespace StateSet\Client\Helpers;

use DateTime;
use OpenAPI\Client\Model\Warranty;
use StateSet\Client\StateSetClient;
use StateSet\Client\StateSetException;

/**
 * Helper class for warranty operations
 * 
 * Provides common workflows and utilities for working with warranties
 */
class WarrantyHelper
{
    private StateSetClient $client;

    public function __construct(StateSetClient $client)
    {
        $this->client = $client;
    }

    /**
     * Create a new warranty with validation
     */
    public function createWarranty(array $warrantyData): Warranty
    {
        $this->validateWarrantyData($warrantyData);
        
        return $this->client->executeWithLogging(
            fn() => $this->client->warranties()->createWarranty($warrantyData),
            'create_warranty'
        );
    }

    /**
     * Get warranty by ID
     */
    public function getWarranty(string $warrantyId): Warranty
    {
        if (empty($warrantyId)) {
            throw new StateSetException('Warranty ID cannot be empty');
        }
        
        return $this->client->executeWithLogging(
            fn() => $this->client->warranties()->getWarrantyById($warrantyId),
            "get_warranty_{$warrantyId}"
        );
    }

    /**
     * Check if warranty is still valid
     */
    public function isWarrantyValid(string $warrantyId): bool
    {
        $warranty = $this->getWarranty($warrantyId);
        
        if (!isset($warranty['expiration_date'])) {
            return false;
        }
        
        $expirationDate = new DateTime($warranty['expiration_date']);
        $now = new DateTime();
        
        return $expirationDate > $now;
    }

    /**
     * Extend warranty period
     */
    public function extendWarranty(string $warrantyId, int $additionalMonths): Warranty
    {
        if ($additionalMonths <= 0) {
            throw new StateSetException('Additional months must be greater than 0');
        }
        
        $warranty = $this->getWarranty($warrantyId);
        
        if (!isset($warranty['expiration_date'])) {
            throw new StateSetException('Warranty does not have an expiration date');
        }
        
        $currentExpiration = new DateTime($warranty['expiration_date']);
        $newExpiration = $currentExpiration->modify("+{$additionalMonths} months");
        
        return $this->client->executeWithLogging(
            fn() => $this->client->warranties()->updateWarranty($warrantyId, [
                'expiration_date' => $newExpiration->format('Y-m-d H:i:s'),
            ]),
            "extend_warranty_{$warrantyId}"
        );
    }

    /**
     * Create warranty claim
     */
    public function createWarrantyClaim(string $warrantyId, array $claimData): array
    {
        // Check if warranty is valid
        if (!$this->isWarrantyValid($warrantyId)) {
            throw new StateSetException('Warranty has expired or is invalid');
        }
        
        $this->validateClaimData($claimData);
        $claimData['warranty_id'] = $warrantyId;
        $claimData['claim_date'] = date('Y-m-d H:i:s');
        $claimData['status'] = 'pending';
        
        // This would typically create a warranty claim record
        // For now, we'll return the claim data with an ID
        return array_merge($claimData, [
            'id' => uniqid('claim_'),
            'created_at' => date('c'),
        ]);
    }

    /**
     * Get warranty coverage details
     */
    public function getWarrantyCoverage(string $warrantyId): array
    {
        $warranty = $this->getWarranty($warrantyId);
        
        $coverage = [
            'warranty_id' => $warrantyId,
            'is_valid' => $this->isWarrantyValid($warrantyId),
            'coverage_type' => $warranty['coverage_type'] ?? 'standard',
            'start_date' => $warranty['start_date'] ?? null,
            'expiration_date' => $warranty['expiration_date'] ?? null,
        ];
        
        if (isset($warranty['expiration_date'])) {
            $expiration = new DateTime($warranty['expiration_date']);
            $now = new DateTime();
            $interval = $now->diff($expiration);
            
            if ($expiration > $now) {
                $coverage['days_remaining'] = $interval->days;
                $coverage['months_remaining'] = ($interval->y * 12) + $interval->m;
            } else {
                $coverage['days_remaining'] = 0;
                $coverage['months_remaining'] = 0;
                $coverage['expired_days_ago'] = $interval->days;
            }
        }
        
        return $coverage;
    }

    /**
     * Transfer warranty to new owner
     */
    public function transferWarranty(string $warrantyId, string $newOwnerId): Warranty
    {
        if (empty($newOwnerId)) {
            throw new StateSetException('New owner ID cannot be empty');
        }
        
        return $this->client->executeWithLogging(
            fn() => $this->client->warranties()->updateWarranty($warrantyId, [
                'owner_id' => $newOwnerId,
                'transferred_at' => date('Y-m-d H:i:s'),
            ]),
            "transfer_warranty_{$warrantyId}"
        );
    }

    /**
     * Validate warranty data
     */
    private function validateWarrantyData(array $data): void
    {
        $required = ['product_id', 'customer_id', 'start_date', 'duration_months'];
        
        foreach ($required as $field) {
            if (!isset($data[$field]) || empty($data[$field])) {
                throw new StateSetException("Required field missing: {$field}");
            }
        }
        
        if ((int) $data['duration_months'] <= 0) {
            throw new StateSetException('Duration must be greater than 0 months');
        }
    }

    /**
     * Validate warranty claim data
     */
    private function validateClaimData(array $data): void
    {
        $required = ['issue_description', 'customer_contact'];
        
        foreach ($required as $field) {
            if (!isset($data[$field]) || empty($data[$field])) {
                throw new StateSetException("Required field missing for warranty claim: {$field}");
            }
        }
    }
}