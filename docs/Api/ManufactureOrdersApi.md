# OpenAPI\Client\ManufactureOrdersApi

All URIs are relative to https://api.stateset.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getManufactureOrderById()**](ManufactureOrdersApi.md#getManufactureOrderById) | **GET** /manufactureorders/{id} | Get manufacture order by id |
| [**getManufactureOrders()**](ManufactureOrdersApi.md#getManufactureOrders) | **GET** /manufactureorders | Get account by manufacture order id |
| [**updateManufactureOrder()**](ManufactureOrdersApi.md#updateManufactureOrder) | **PUT** /manufactureorders/{id} | Updated manufacture order |


## `getManufactureOrderById()`

```php
getManufactureOrderById($id): \OpenAPI\Client\Model\ManufactureOrder
```

Get manufacture order by id

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


$apiInstance = new OpenAPI\Client\Api\ManufactureOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id that needs to be fetched

try {
    $result = $apiInstance->getManufactureOrderById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManufactureOrdersApi->getManufactureOrderById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id that needs to be fetched | |

### Return type

[**\OpenAPI\Client\Model\ManufactureOrder**](../Model/ManufactureOrder.md)

### Authorization

[api_key](../../README.md#api_key), [main_auth](../../README.md#main_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getManufactureOrders()`

```php
getManufactureOrders($limit, $offset, $order_direction): \OpenAPI\Client\Model\ManufactureOrder
```

Get account by manufacture order id

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


$apiInstance = new OpenAPI\Client\Api\ManufactureOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 3.4; // float | The number of items to return
$offset = 3.4; // float | Offset to return manufacture orders
$order_direction = 'order_direction_example'; // string | Direction to return manufacture orders

try {
    $result = $apiInstance->getManufactureOrders($limit, $offset, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManufactureOrdersApi->getManufactureOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **float**| The number of items to return | |
| **offset** | **float**| Offset to return manufacture orders | |
| **order_direction** | **string**| Direction to return manufacture orders | |

### Return type

[**\OpenAPI\Client\Model\ManufactureOrder**](../Model/ManufactureOrder.md)

### Authorization

[api_key](../../README.md#api_key), [main_auth](../../README.md#main_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateManufactureOrder()`

```php
updateManufactureOrder($id, $manufacture_order)
```

Updated manufacture order

This can only be done by the logged in user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: main_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManufactureOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id that needs to be updated
$manufacture_order = new \OpenAPI\Client\Model\ManufactureOrder(); // \OpenAPI\Client\Model\ManufactureOrder | Updated manufacture order object

try {
    $apiInstance->updateManufactureOrder($id, $manufacture_order);
} catch (Exception $e) {
    echo 'Exception when calling ManufactureOrdersApi->updateManufactureOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id that needs to be updated | |
| **manufacture_order** | [**\OpenAPI\Client\Model\ManufactureOrder**](../Model/ManufactureOrder.md)| Updated manufacture order object | |

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
