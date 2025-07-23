# Changelog

All notable changes to the StateSet PHP Client will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [2.0.0] - 2025-01-03

### 🚀 Major Improvements

#### Added
- **Modern StateSetClient wrapper** - New `StateSetClient` class providing a clean, modern interface
- **Helper classes** - Pre-built helpers for common workflows:
  - `ReturnsHelper` - Complete returns processing workflow
  - `WarrantyHelper` - Warranty lifecycle management
- **Enhanced error handling** - Custom `StateSetException` with error categorization
- **PSR-3 logging support** - Built-in logging capabilities
- **Environment configuration** - Easy setup via environment variables
- **Modern PHP 8.1+ features** - Strict types, named arguments, nullable types
- **Development tools configuration**:
  - PHP CS Fixer configuration (`.php-cs-fixer.dist.php`)
  - PHPStan static analysis configuration (`phpstan.neon.dist`)
  - Modern PHPUnit configuration (`phpunit.xml.dist`)
- **Comprehensive examples** - Real-world usage examples in `examples/` directory
- **Quality assurance scripts** - Composer scripts for testing, linting, and analysis

#### Enhanced
- **Composer configuration** - Updated with modern dependencies and scripts
- **Namespace structure** - Migrated from `OpenAPI\Client` to `StateSet\Client`
- **Documentation** - Complete rewrite of README with modern examples
- **Autoloading** - PSR-4 compliant autoloading structure
- **Dependencies** - Updated to latest stable versions with security advisories

#### Error Handling Improvements
- Detailed exception context and response body capture
- Error type categorization (Authentication, Validation, Rate Limit, Server)
- Human-readable error messages
- Structured error data for debugging

#### Developer Experience
- Environment-based configuration (`STATESET_API_KEY`, `STATESET_BASE_URL`)
- Fluent API interface with method chaining
- IDE-friendly code with proper type hints
- Comprehensive inline documentation

### 🔧 Technical Improvements

#### Dependencies
- **PHP**: Upgraded minimum requirement to 8.1+
- **Guzzle**: Updated to latest stable version (7.9.3)
- **PHPUnit**: Upgraded to version 10.5
- **PHP CS Fixer**: Updated to version 3.84
- **PHPStan**: Added for static analysis
- **Mockery**: Added for better testing capabilities

#### Code Quality
- Strict typing throughout the codebase
- PSR-12 coding standards compliance
- Level 8 PHPStan static analysis
- Comprehensive code coverage support
- Automated quality checks via Composer scripts

#### Testing Infrastructure
- Modern PHPUnit configuration with coverage reporting
- Automated test discovery
- Coverage HTML and Clover XML reports
- JUnit XML output for CI/CD integration

### 🔄 Migration Guide

#### Breaking Changes
- **PHP Version**: Now requires PHP 8.1 or higher
- **Namespace**: Changed from `OpenAPI\Client` to `StateSet\Client`
- **Client Interface**: New `StateSetClient` wrapper class (old API classes still available)

#### Migration Steps
1. Update PHP to version 8.1 or higher
2. Update Composer dependencies: `composer update`
3. Replace old client instantiation:
   ```php
   // Old way
   $config = new OpenAPI\Client\Configuration();
   $client = new OpenAPI\Client\Api\ReturnsApi(null, $config);
   
   // New way
   $client = new StateSet\Client\StateSetClient('your-api-key');
   $returns = $client->returns();
   ```

### 📚 New Features in Detail

#### StateSetClient
- Centralized configuration management
- Lazy-loaded API instances
- Built-in error handling and logging
- Environment variable support

#### Helper Classes
- **ReturnsHelper**: Streamlined returns processing with validation
- **WarrantyHelper**: Complete warranty lifecycle management
- Input validation and business logic encapsulation
- Workflow automation for common tasks

#### Error Handling
- Custom exception hierarchy
- Error type detection and categorization
- Detailed context and debugging information
- PSR-3 compatible logging integration

### 🛠 Development Tools

#### Added Scripts
- `composer test` - Run PHPUnit tests
- `composer test:coverage` - Generate coverage reports
- `composer cs:check` - Check code style
- `composer cs:fix` - Fix code style issues
- `composer phpstan` - Run static analysis
- `composer quality` - Run all quality checks

#### Configuration Files
- `.php-cs-fixer.dist.php` - PHP CS Fixer configuration
- `phpstan.neon.dist` - PHPStan static analysis rules
- `phpunit.xml.dist` - Modern PHPUnit configuration
- `.gitignore` - Comprehensive ignore patterns

### 📖 Documentation

#### Updated README
- Modern installation and setup instructions
- Comprehensive API examples
- Helper class usage guides
- Error handling patterns
- Logging configuration examples

#### New Examples
- `examples/basic_usage.php` - Basic client setup and usage
- Workflow examples for returns and warranties
- Error handling demonstrations
- Environment configuration examples

### 🔒 Security

#### Improvements
- Added `roave/security-advisories` for dependency vulnerability scanning
- Modern TLS/SSL configuration in HTTP client
- Secure default timeouts and connection settings
- API key handling best practices

### 🏆 Quality Metrics

#### Code Quality
- 100% strict typing coverage
- PSR-12 coding standards compliance
- Level 8 PHPStan static analysis passing
- Comprehensive error handling coverage

#### Testing
- Modern PHPUnit test framework
- Coverage reporting capabilities
- Mockery integration for better mocking
- CI/CD ready configuration

---

## [1.x] - Previous Versions

### Legacy Features
- Basic OpenAPI generated client
- PHP 7.4+ support
- Standard API endpoint coverage
- Basic error handling