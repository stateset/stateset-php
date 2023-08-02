# OpenAPI\Client\InventoryItemsApi

All URIs are relative to https://api.stateset.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createInventoryItems()**](InventoryItemsApi.md#createInventoryItems) | **POST** /inventoryitems | Create a new inventory items |
| [**getInventoryItemById()**](InventoryItemsApi.md#getInventoryItemById) | **GET** /inventoryitems/{id} | Get inventory items by id |
| [**getInventoryItems()**](InventoryItemsApi.md#getInventoryItems) | **GET** /inventoryitems | Get inventory items |
| [**updateInventoryItem()**](InventoryItemsApi.md#updateInventoryItem) | **PUT** /inventoryitems/{id} | Updated inventory items |


## `createInventoryItems()`

```php
createInventoryItems($inventory_items)
```

Create a new inventory items

Create a new inventory items. This can only be done by the logged in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: main_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_items = new \OpenAPI\Client\Model\InventoryItems(); // \OpenAPI\Client\Model\InventoryItems | Created inventory items object

try {
    $apiInstance->createInventoryItems($inventory_items);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemsApi->createInventoryItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **inventory_items** | [**\OpenAPI\Client\Model\InventoryItems**](../Model/InventoryItems.md)| Created inventory items object | |

### Return type

void (empty response body)

### Authorization

[main_auth](../../README.md#main_auth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInventoryItemById()`

```php
getInventoryItemById($id): \OpenAPI\Client\Model\InventoryItems
```

Get inventory items by id

Some description of the operation. You can use `Markdown` here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: main_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id that needs to be fetched

try {
    $result = $apiInstance->getInventoryItemById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemsApi->getInventoryItemById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id that needs to be fetched | |

### Return type

[**\OpenAPI\Client\Model\InventoryItems**](../Model/InventoryItems.md)

### Authorization

[api_key](../../README.md#api_key), [main_auth](../../README.md#main_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInventoryItems()`

```php
getInventoryItems($limit, $offset, $order_direction): \OpenAPI\Client\Model\InventoryItems
```

Get inventory items

Some description of the operation. You can use `Markdown` here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: main_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 3.4; // float | The number of items to return
$offset = 3.4; // float | Filter users without email
$order_direction = 'order_direction_example'; // string | Direction to return accounts

try {
    $result = $apiInstance->getInventoryItems($limit, $offset, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemsApi->getInventoryItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **float**| The number of items to return | |
| **offset** | **float**| Filter users without email | |
| **order_direction** | **string**| Direction to return accounts | |

### Return type

[**\OpenAPI\Client\Model\InventoryItems**](../Model/InventoryItems.md)

### Authorization

[api_key](../../README.md#api_key), [main_auth](../../README.md#main_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInventoryItem()`

```php
updateInventoryItem($id, $inventory_items)
```

Updated inventory items

This can only be done by the logged in user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: main_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InventoryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id that needs to be updated
$inventory_items = new \OpenAPI\Client\Model\InventoryItems(); // \OpenAPI\Client\Model\InventoryItems | Updated inventory items object

try {
    $apiInstance->updateInventoryItem($id, $inventory_items);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemsApi->updateInventoryItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id that needs to be updated | |
| **inventory_items** | [**\OpenAPI\Client\Model\InventoryItems**](../Model/InventoryItems.md)| Updated inventory items object | |

### Return type

void (empty response body)

### Authorization

[main_auth](../../README.md#main_auth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
