# StateSet PHP Client

[![PHP Version](https://img.shields.io/badge/php-%3E%3D8.1-blue.svg)](https://php.net/)
[![Composer](https://img.shields.io/badge/composer-required-brightgreen.svg)](https://getcomposer.org/)
[![License](https://img.shields.io/badge/license-MIT-green.svg)](LICENSE)

A modern, comprehensive PHP SDK for the StateSet API, providing easy access to returns, warranties, work orders, inventory management, and more.

## 🚀 Features

- **Modern PHP 8.1+** - Built with modern PHP features including strict types, named arguments, and match expressions
- **PSR Standards Compliant** - Follows PSR-4 autoloading, PSR-12 coding standards, and PSR-3 logging
- **Comprehensive API Coverage** - Full support for all StateSet API endpoints
- **Helper Classes** - Pre-built helpers for common workflows (returns processing, warranty management)
- **Rich Error Handling** - Detailed exception handling with context and error categorization
- **Logging Support** - Built-in PSR-3 logging support for debugging and monitoring
- **Environment Configuration** - Easy setup via environment variables
- **Developer Experience** - Extensive documentation, examples, and IDE-friendly code

## 📦 Installation

Install via Composer:

```bash
composer require stateset/php-client
```

## 🏁 Quick Start

### Basic Setup

```php
<?php

use StateSet\Client\StateSetClient;

// Method 1: Direct configuration
$client = new StateSetClient(
    apiKey: 'your-api-key-here',
    baseUrl: 'https://api.stateset.com'
);

// Method 2: Environment variables (recommended)
// Set STATESET_API_KEY and STATESET_BASE_URL in your environment
$client = StateSetClient::fromEnvironment();
```

### Environment Variables

Create a `.env` file or set environment variables:

```bash
STATESET_API_KEY=your_api_key_here
STATESET_BASE_URL=https://api.stateset.com
```

## 🔧 API Reference

The client provides access to all StateSet API endpoints through intuitive methods:

### Accounts
```php
// Get account by name
$account = $client->accounts()->getAccountByName('company-name');
```

### Returns Management
```php
// Basic returns operations
$returns = $client->returns()->getReturns();
$return = $client->returns()->getReturnById('return_123');
$newReturn = $client->returns()->createReturn($returnData);
```

### Warranties
```php
// Warranty operations
$warranties = $client->warranties()->getWarranties();
$warranty = $client->warranties()->getWarrantyById('warranty_123');
$newWarranty = $client->warranties()->createWarranty($warrantyData);
```

### Work Orders
```php
// Work order management
$workOrders = $client->workOrders()->getWorkOrders();
$workOrder = $client->workOrders()->getWorkOrderById('wo_123');
$newWorkOrder = $client->workOrders()->createWorkOrder($workOrderData);
```

### Inventory
```php
// Inventory management
$inventory = $client->inventoryItems()->getInventoryItems();
$item = $client->inventoryItems()->getInventoryItemById('item_123');
```

### Customers
```php
// Customer management
$customers = $client->customers()->getCustomers();
$customer = $client->customers()->getCustomerById('customer_123');
```

## 🛠 Helper Classes

StateSet PHP Client includes helper classes for common workflows:

### Returns Helper

```php
use StateSet\Client\Helpers\ReturnsHelper;

$returnsHelper = new ReturnsHelper($client);

// Create a return with validation
$return = $returnsHelper->createReturn([
    'customer_id' => 'customer_123',
    'reason' => 'Defective product',
    'order_id' => 'order_456'
]);

// Add items to return
$items = [
    [
        'product_id' => 'product_789',
        'quantity' => 2,
        'unit_price' => 49.99,
        'reason' => 'Defective'
    ]
];
$returnsHelper->addItemsToReturn($return['id'], $items);

// Calculate refund amount
$refundAmount = $returnsHelper->calculateRefundAmount($return['id']);

// Process return (approve and calculate refund)
$processedReturn = $returnsHelper->processReturn($return['id']);
```

### Warranty Helper

```php
use StateSet\Client\Helpers\WarrantyHelper;

$warrantyHelper = new WarrantyHelper($client);

// Create warranty
$warranty = $warrantyHelper->createWarranty([
    'product_id' => 'product_123',
    'customer_id' => 'customer_456',
    'start_date' => date('Y-m-d'),
    'duration_months' => 24,
    'coverage_type' => 'full'
]);

// Check if warranty is valid
$isValid = $warrantyHelper->isWarrantyValid($warranty['id']);

// Get detailed coverage information
$coverage = $warrantyHelper->getWarrantyCoverage($warranty['id']);

// Extend warranty
$extendedWarranty = $warrantyHelper->extendWarranty($warranty['id'], 6);

// Create warranty claim
$claim = $warrantyHelper->createWarrantyClaim($warranty['id'], [
    'issue_description' => 'Product stopped working',
    'customer_contact' => 'customer@example.com'
]);
```

## 🔍 Error Handling

The client provides comprehensive error handling:

```php
use StateSet\Client\StateSetException;

try {
    $result = $client->returns()->getReturnById('invalid_id');
} catch (StateSetException $e) {
    echo "Error: " . $e->getMessage() . "\n";
    echo "Type: " . $e->getErrorType() . "\n";
    echo "Code: " . $e->getCode() . "\n";
    
    // Check error type
    if ($e->isAuthenticationError()) {
        echo "Please check your API key\n";
    } elseif ($e->isValidationError()) {
        echo "Invalid data provided\n";
    } elseif ($e->isRateLimitError()) {
        echo "Rate limit exceeded, please retry later\n";
    }
    
    // Get full error context
    $errorDetails = $e->toArray();
}
```

## 📊 Logging

Enable logging for debugging and monitoring:

```php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('stateset');
$logger->pushHandler(new StreamHandler('logs/stateset.log', Logger::INFO));

$client = new StateSetClient(
    apiKey: 'your-api-key',
    baseUrl: 'https://api.stateset.com',
    logger: $logger
);

// All API calls will now be logged
$return = $client->returns()->getReturnById('return_123');
```

## 🧪 Development

### Requirements

- PHP 8.1 or higher
- Composer
- cURL extension
- JSON extension
- mbstring extension

### Development Setup

```bash
# Clone the repository
git clone https://github.com/stateset/stateset-php.git
cd stateset-php

# Install dependencies
composer install

# Run tests
composer test

# Run code style checks
composer cs:check

# Fix code style issues
composer cs:fix

# Run static analysis
composer phpstan

# Run all quality checks
composer quality
```

### Available Scripts

```bash
composer test              # Run PHPUnit tests
composer test:coverage     # Run tests with coverage report
composer cs:check          # Check code style
composer cs:fix            # Fix code style issues
composer phpstan           # Run static analysis
composer quality           # Run all quality checks
```

## 📚 Examples

Check out the `examples/` directory for comprehensive usage examples:

- `examples/basic_usage.php` - Basic client setup and API usage
- `examples/returns_workflow.php` - Complete returns processing workflow
- `examples/warranty_management.php` - Warranty lifecycle management
- `examples/error_handling.php` - Error handling patterns

## 🤝 Contributing

We welcome contributions! Please see our [Contributing Guide](CONTRIBUTING.md) for details.

### Development Workflow

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Add tests for new functionality
5. Run the test suite
6. Submit a pull request

## 📄 License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## 🆘 Support

- **Documentation**: [docs.stateset.com](https://docs.stateset.com)
- **API Reference**: [api-docs.stateset.com](https://api-docs.stateset.com)
- **Issues**: [GitHub Issues](https://github.com/stateset/stateset-php/issues)
- **Email**: [support@stateset.com](mailto:support@stateset.com)

## 🏷️ Version History

### v2.0.0 (Latest)
- **BREAKING**: Requires PHP 8.1+
- Modern PHP 8.1+ features and syntax
- Improved error handling with `StateSetException`
- Helper classes for common workflows
- PSR-3 logging support
- Comprehensive test suite
- Updated dependencies

### v1.x
- Legacy PHP 7.4+ support
- Basic OpenAPI generated client

---

**Made with ❤️ by [StateSet](https://stateset.com)**
