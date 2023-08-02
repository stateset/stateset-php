# OpenAPI\Client\BillOfMaterialsLineItemsApi

All URIs are relative to https://api.stateset.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBillOfMaterialsItemById()**](BillOfMaterialsLineItemsApi.md#getBillOfMaterialsItemById) | **GET** /billofmaterialsitems | Get bill of materials item by id |
| [**getBillOfMaterialsLineItemById()**](BillOfMaterialsLineItemsApi.md#getBillOfMaterialsLineItemById) | **GET** /billofmaterialsitems/{id} | Get bill of materials line item by id |
| [**updateBillOfMaterialsLineItem()**](BillOfMaterialsLineItemsApi.md#updateBillOfMaterialsLineItem) | **PUT** /billofmaterialsitems/{id} | Updated billofmaterials line item |


## `getBillOfMaterialsItemById()`

```php
getBillOfMaterialsItemById($limit, $offset, $order_direction): \OpenAPI\Client\Model\BillOfMaterialsLineItem
```

Get bill of materials item by id

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


$apiInstance = new OpenAPI\Client\Api\BillOfMaterialsLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 3.4; // float | The number of items to manufacture
$offset = 3.4; // float | Filter users without email
$order_direction = 'order_direction_example'; // string | Direction of billOfMaterialsItem

try {
    $result = $apiInstance->getBillOfMaterialsItemById($limit, $offset, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillOfMaterialsLineItemsApi->getBillOfMaterialsItemById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **float**| The number of items to manufacture | |
| **offset** | **float**| Filter users without email | |
| **order_direction** | **string**| Direction of billOfMaterialsItem | |

### Return type

[**\OpenAPI\Client\Model\BillOfMaterialsLineItem**](../Model/BillOfMaterialsLineItem.md)

### Authorization

[api_key](../../README.md#api_key), [main_auth](../../README.md#main_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillOfMaterialsLineItemById()`

```php
getBillOfMaterialsLineItemById($id): \OpenAPI\Client\Model\ManufactureOrderLineItem
```

Get bill of materials line item by id

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


$apiInstance = new OpenAPI\Client\Api\BillOfMaterialsLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id that needs to be fetched

try {
    $result = $apiInstance->getBillOfMaterialsLineItemById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillOfMaterialsLineItemsApi->getBillOfMaterialsLineItemById: ', $e->getMessage(), PHP_EOL;
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

## `updateBillOfMaterialsLineItem()`

```php
updateBillOfMaterialsLineItem($id, $manufacture_order_line_item)
```

Updated billofmaterials line item

This can only be done by the logged in user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: main_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillOfMaterialsLineItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id that needs to be updated
$manufacture_order_line_item = new \OpenAPI\Client\Model\ManufactureOrderLineItem(); // \OpenAPI\Client\Model\ManufactureOrderLineItem | Updated reuturn object

try {
    $apiInstance->updateBillOfMaterialsLineItem($id, $manufacture_order_line_item);
} catch (Exception $e) {
    echo 'Exception when calling BillOfMaterialsLineItemsApi->updateBillOfMaterialsLineItem: ', $e->getMessage(), PHP_EOL;
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
