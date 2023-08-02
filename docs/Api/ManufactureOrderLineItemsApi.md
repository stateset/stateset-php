# OpenAPI\Client\ManufactureOrderLineItemsApi

All URIs are relative to https://api.stateset.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getManufactureItemById()**](ManufactureOrderLineItemsApi.md#getManufactureItemById) | **GET** /manufactureorderitems | Get manufactureItem by id |
| [**getManufactureLineItemById()**](ManufactureOrderLineItemsApi.md#getManufactureLineItemById) | **GET** /manufactureorderitems/{id} | Get manufacture line item by id |
| [**updateManufactureLineItem()**](ManufactureOrderLineItemsApi.md#updateManufactureLineItem) | **PUT** /manufactureorderitems/{id} | Updated manufacture line item |


## `getManufactureItemById()`

```php
getManufactureItemById($limit, $offset, $order_direction): \OpenAPI\Client\Model\ManufactureOrderLineItem
```

Get manufactureItem by id

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


$apiInstance = new OpenAPI\Client\Api\ManufactureOrderLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 3.4; // float | The number of items to manufacture
$offset = 3.4; // float | Filter users without email
$order_direction = 'order_direction_example'; // string | Direction to manufacture accounts

try {
    $result = $apiInstance->getManufactureItemById($limit, $offset, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManufactureOrderLineItemsApi->getManufactureItemById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **float**| The number of items to manufacture | |
| **offset** | **float**| Filter users without email | |
| **order_direction** | **string**| Direction to manufacture accounts | |

### Return type

[**\OpenAPI\Client\Model\ManufactureOrderLineItem**](../Model/ManufactureOrderLineItem.md)

### Authorization

[api_key](../../README.md#api_key), [main_auth](../../README.md#main_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getManufactureLineItemById()`

```php
getManufactureLineItemById($id): \OpenAPI\Client\Model\ManufactureOrderLineItem
```

Get manufacture line item by id

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


$apiInstance = new OpenAPI\Client\Api\ManufactureOrderLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id that needs to be fetched

try {
    $result = $apiInstance->getManufactureLineItemById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManufactureOrderLineItemsApi->getManufactureLineItemById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id that needs to be fetched | |

### Return type

[**\OpenAPI\Client\Model\ManufactureOrderLineItem**](../Model/ManufactureOrderLineItem.md)

### Authorization

[api_key](../../README.md#api_key), [main_auth](../../README.md#main_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateManufactureLineItem()`

```php
updateManufactureLineItem($id, $manufacture_order_line_item)
```

Updated manufacture line item

This can only be done by the logged in user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: main_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ManufactureOrderLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id that needs to be updated
$manufacture_order_line_item = new \OpenAPI\Client\Model\ManufactureOrderLineItem(); // \OpenAPI\Client\Model\ManufactureOrderLineItem | Updated reuturn object

try {
    $apiInstance->updateManufactureLineItem($id, $manufacture_order_line_item);
} catch (Exception $e) {
    echo 'Exception when calling ManufactureOrderLineItemsApi->updateManufactureLineItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id that needs to be updated | |
| **manufacture_order_line_item** | [**\OpenAPI\Client\Model\ManufactureOrderLineItem**](../Model/ManufactureOrderLineItem.md)| Updated reuturn object | |

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
