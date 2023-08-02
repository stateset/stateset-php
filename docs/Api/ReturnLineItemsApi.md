# OpenAPI\Client\ReturnLineItemsApi

All URIs are relative to https://api.stateset.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getReturnItemById()**](ReturnLineItemsApi.md#getReturnItemById) | **GET** /returnitems | Get returnItem by id |
| [**getReturnLineItemById()**](ReturnLineItemsApi.md#getReturnLineItemById) | **GET** /returnitems/{id} | Get return line item by id |
| [**updateReturnLineItem()**](ReturnLineItemsApi.md#updateReturnLineItem) | **PUT** /returnitems/{id} | Updated return line item |


## `getReturnItemById()`

```php
getReturnItemById($limit, $offset, $order_direction): \OpenAPI\Client\Model\ReturnItem
```

Get returnItem by id

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


$apiInstance = new OpenAPI\Client\Api\ReturnLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 3.4; // float | The number of items to return
$offset = 3.4; // float | Filter users without email
$order_direction = 'order_direction_example'; // string | Direction to return accounts

try {
    $result = $apiInstance->getReturnItemById($limit, $offset, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnLineItemsApi->getReturnItemById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **float**| The number of items to return | |
| **offset** | **float**| Filter users without email | |
| **order_direction** | **string**| Direction to return accounts | |

### Return type

[**\OpenAPI\Client\Model\ReturnItem**](../Model/ReturnItem.md)

### Authorization

[api_key](../../README.md#api_key), [main_auth](../../README.md#main_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturnLineItemById()`

```php
getReturnLineItemById($id): \OpenAPI\Client\Model\ReturnItem
```

Get return line item by id

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


$apiInstance = new OpenAPI\Client\Api\ReturnLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id that needs to be fetched

try {
    $result = $apiInstance->getReturnLineItemById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnLineItemsApi->getReturnLineItemById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id that needs to be fetched | |

### Return type

[**\OpenAPI\Client\Model\ReturnItem**](../Model/ReturnItem.md)

### Authorization

[api_key](../../README.md#api_key), [main_auth](../../README.md#main_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateReturnLineItem()`

```php
updateReturnLineItem($id, $return_item)
```

Updated return line item

This can only be done by the logged in user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: main_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReturnLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id that needs to be updated
$return_item = new \OpenAPI\Client\Model\ReturnItem(); // \OpenAPI\Client\Model\ReturnItem | Updated reuturn object

try {
    $apiInstance->updateReturnLineItem($id, $return_item);
} catch (Exception $e) {
    echo 'Exception when calling ReturnLineItemsApi->updateReturnLineItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id that needs to be updated | |
| **return_item** | [**\OpenAPI\Client\Model\ReturnItem**](../Model/ReturnItem.md)| Updated reuturn object | |

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
