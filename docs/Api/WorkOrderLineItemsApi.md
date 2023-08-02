# OpenAPI\Client\WorkOrderLineItemsApi

All URIs are relative to https://api.stateset.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getWorkItemById()**](WorkOrderLineItemsApi.md#getWorkItemById) | **GET** /workorderitems | Get work order item by id |
| [**getWorkLineItemById()**](WorkOrderLineItemsApi.md#getWorkLineItemById) | **GET** /workorderitems/{id} | Get work line item by id |
| [**updateWorkLineItem()**](WorkOrderLineItemsApi.md#updateWorkLineItem) | **PUT** /workorderitems/{id} | Updated work line item |


## `getWorkItemById()`

```php
getWorkItemById($limit, $offset, $order_direction): \OpenAPI\Client\Model\WorkOrderLineItems
```

Get work order item by id

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


$apiInstance = new OpenAPI\Client\Api\WorkOrderLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 3.4; // float | The number of items
$offset = 3.4; // float | Filter users without email
$order_direction = 'order_direction_example'; // string | diretions to return work order items

try {
    $result = $apiInstance->getWorkItemById($limit, $offset, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkOrderLineItemsApi->getWorkItemById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **float**| The number of items | |
| **offset** | **float**| Filter users without email | |
| **order_direction** | **string**| diretions to return work order items | |

### Return type

[**\OpenAPI\Client\Model\WorkOrderLineItems**](../Model/WorkOrderLineItems.md)

### Authorization

[api_key](../../README.md#api_key), [main_auth](../../README.md#main_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkLineItemById()`

```php
getWorkLineItemById($id): \OpenAPI\Client\Model\WorkOrderLineItems
```

Get work line item by id

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


$apiInstance = new OpenAPI\Client\Api\WorkOrderLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id that needs to be fetched

try {
    $result = $apiInstance->getWorkLineItemById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkOrderLineItemsApi->getWorkLineItemById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id that needs to be fetched | |

### Return type

[**\OpenAPI\Client\Model\WorkOrderLineItems**](../Model/WorkOrderLineItems.md)

### Authorization

[api_key](../../README.md#api_key), [main_auth](../../README.md#main_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWorkLineItem()`

```php
updateWorkLineItem($id, $work_order_line_items)
```

Updated work line item

This can only be done by the logged in user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: main_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkOrderLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id that needs to be updated
$work_order_line_items = new \OpenAPI\Client\Model\WorkOrderLineItems(); // \OpenAPI\Client\Model\WorkOrderLineItems | Updated reuturn object

try {
    $apiInstance->updateWorkLineItem($id, $work_order_line_items);
} catch (Exception $e) {
    echo 'Exception when calling WorkOrderLineItemsApi->updateWorkLineItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id that needs to be updated | |
| **work_order_line_items** | [**\OpenAPI\Client\Model\WorkOrderLineItems**](../Model/WorkOrderLineItems.md)| Updated reuturn object | |

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
