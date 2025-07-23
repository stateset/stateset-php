<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use StateSet\Client\StateSetClient;
use StateSet\Client\StateSetException;
use StateSet\Client\Helpers\ReturnsHelper;
use StateSet\Client\Helpers\WarrantyHelper;

// Example 1: Basic client setup
echo "=== StateSet PHP Client Examples ===\n\n";

try {
    // Method 1: Create client with API key
    $client = new StateSetClient(
        apiKey: 'your-api-key-here',
        baseUrl: 'https://api.stateset.com'
    );
    
    // Method 2: Create client from environment variables
    // Set STATESET_API_KEY and STATESET_BASE_URL in your environment
    // $client = StateSetClient::fromEnvironment();
    
    echo "✓ Client initialized successfully\n\n";
    
    // Example 2: Working with accounts
    echo "=== Accounts Example ===\n";
    
    try {
        $account = $client->accounts()->getAccountByName('demo-account');
        echo "✓ Account retrieved: " . json_encode($account, JSON_PRETTY_PRINT) . "\n\n";
    } catch (StateSetException $e) {
        echo "✗ Account error: " . $e->getMessage() . "\n\n";
    }
    
    // Example 3: Working with returns using helper
    echo "=== Returns Helper Example ===\n";
    
    $returnsHelper = new ReturnsHelper($client);
    
    try {
        // Create a new return
        $returnData = [
            'customer_id' => 'customer_123',
            'reason' => 'Defective product',
            'order_id' => 'order_456',
        ];
        
        $newReturn = $returnsHelper->createReturn($returnData);
        echo "✓ Return created with ID: " . $newReturn['id'] . "\n";
        
        // Add items to the return
        $items = [
            [
                'product_id' => 'product_789',
                'quantity' => 1,
                'unit_price' => 99.99,
                'reason' => 'Defective',
            ],
        ];
        
        $addedItems = $returnsHelper->addItemsToReturn($newReturn['id'], $items);
        echo "✓ Added " . count($addedItems) . " items to return\n";
        
        // Calculate refund amount
        $refundAmount = $returnsHelper->calculateRefundAmount($newReturn['id']);
        echo "✓ Calculated refund amount: $" . number_format($refundAmount, 2) . "\n";
        
        // Process the return
        $processedReturn = $returnsHelper->processReturn($newReturn['id']);
        echo "✓ Return processed: " . $processedReturn['status'] . "\n\n";
        
    } catch (StateSetException $e) {
        echo "✗ Returns error: " . $e->getMessage() . "\n";
        echo "  Error type: " . $e->getErrorType() . "\n\n";
    }
    
    // Example 4: Working with warranties using helper
    echo "=== Warranty Helper Example ===\n";
    
    $warrantyHelper = new WarrantyHelper($client);
    
    try {
        // Create a new warranty
        $warrantyData = [
            'product_id' => 'product_789',
            'customer_id' => 'customer_123',
            'start_date' => date('Y-m-d'),
            'duration_months' => 12,
            'coverage_type' => 'full',
        ];
        
        $warranty = $warrantyHelper->createWarranty($warrantyData);
        echo "✓ Warranty created with ID: " . $warranty['id'] . "\n";
        
        // Check warranty validity
        $isValid = $warrantyHelper->isWarrantyValid($warranty['id']);
        echo "✓ Warranty is valid: " . ($isValid ? 'Yes' : 'No') . "\n";
        
        // Get warranty coverage details
        $coverage = $warrantyHelper->getWarrantyCoverage($warranty['id']);
        echo "✓ Warranty coverage details:\n";
        echo "  - Valid: " . ($coverage['is_valid'] ? 'Yes' : 'No') . "\n";
        echo "  - Coverage type: " . $coverage['coverage_type'] . "\n";
        echo "  - Months remaining: " . ($coverage['months_remaining'] ?? 'N/A') . "\n";
        
        // Extend warranty
        $extendedWarranty = $warrantyHelper->extendWarranty($warranty['id'], 6);
        echo "✓ Warranty extended by 6 months\n\n";
        
    } catch (StateSetException $e) {
        echo "✗ Warranty error: " . $e->getMessage() . "\n";
        echo "  Error type: " . $e->getErrorType() . "\n\n";
    }
    
    // Example 5: Working with inventory
    echo "=== Inventory Example ===\n";
    
    try {
        // Get inventory items (this would typically return a list)
        $inventoryItems = $client->inventoryItems()->getInventoryItems();
        echo "✓ Retrieved " . count($inventoryItems) . " inventory items\n\n";
        
    } catch (StateSetException $e) {
        echo "✗ Inventory error: " . $e->getMessage() . "\n\n";
    }
    
    // Example 6: Working with work orders
    echo "=== Work Orders Example ===\n";
    
    try {
        // Create a work order
        $workOrderData = [
            'title' => 'Repair defective product',
            'description' => 'Customer reported issue with product functionality',
            'priority' => 'high',
            'assigned_to' => 'technician_456',
        ];
        
        $workOrder = $client->workOrders()->createWorkOrder($workOrderData);
        echo "✓ Work order created with ID: " . $workOrder['id'] . "\n";
        
        // Get work order details
        $workOrderDetails = $client->workOrders()->getWorkOrderById($workOrder['id']);
        echo "✓ Work order details retrieved\n";
        echo "  - Title: " . $workOrderDetails['title'] . "\n";
        echo "  - Priority: " . $workOrderDetails['priority'] . "\n\n";
        
    } catch (StateSetException $e) {
        echo "✗ Work order error: " . $e->getMessage() . "\n\n";
    }
    
    echo "=== All examples completed ===\n";
    
} catch (StateSetException $e) {
    echo "Fatal error: " . $e->getMessage() . "\n";
    echo "Error details: " . print_r($e->toArray(), true) . "\n";
} catch (Exception $e) {
    echo "Unexpected error: " . $e->getMessage() . "\n";
}