# OpenAPI\Client\BillOfMaterialsApi

All URIs are relative to https://api.stateset.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBillofMaterials()**](BillOfMaterialsApi.md#createBillofMaterials) | **POST** /billofmaterials | Create a new bill of materials |
| [**deleteBillOfMaterials()**](BillOfMaterialsApi.md#deleteBillOfMaterials) | **DELETE** /billofmaterials/{id} | Delete Bill of Materials |
| [**getBillOfMaterialsById()**](BillOfMaterialsApi.md#getBillOfMaterialsById) | **GET** /billofmaterials/{id} | Get bill of materials by id |
| [**getBillofMaterials()**](BillOfMaterialsApi.md#getBillofMaterials) | **GET** /billofmaterials | Get bill of materials |
| [**updateBillOfMaterials()**](BillOfMaterialsApi.md#updateBillOfMaterials) | **PUT** /billofmaterials/{id} | Updated bill of materials |


## `createBillofMaterials()`

```php
createBillofMaterials($bill_of_materials)
```

Create a new bill of materials

Create a new bill of materials. This can only be done by the logged in bill of materials.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: main_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillOfMaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bill_of_materials = new \OpenAPI\Client\Model\BillOfMaterials(); // \OpenAPI\Client\Model\BillOfMaterials | Created bill of materials object

try {
    $apiInstance->createBillofMaterials($bill_of_materials);
} catch (Exception $e) {
    echo 'Exception when calling BillOfMaterialsApi->createBillofMaterials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bill_of_materials** | [**\OpenAPI\Client\Model\BillOfMaterials**](../Model/BillOfMaterials.md)| Created bill of materials object | |

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

## `deleteBillOfMaterials()`

```php
deleteBillOfMaterials($id)
```

Delete Bill of Materials

This can only be done by the logged in return.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: main_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillOfMaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the bill of materials that needs to be deleted

try {
    $apiInstance->deleteBillOfMaterials($id);
} catch (Exception $e) {
    echo 'Exception when calling BillOfMaterialsApi->deleteBillOfMaterials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id of the bill of materials that needs to be deleted | |

### Return type

void (empty response body)

### Authorization

[main_auth](../../README.md#main_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillOfMaterialsById()`

```php
getBillOfMaterialsById($id): \OpenAPI\Client\Model\BillOfMaterials
```

Get bill of materials by id

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


$apiInstance = new OpenAPI\Client\Api\BillOfMaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id that needs to be fetched

try {
    $result = $apiInstance->getBillOfMaterialsById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillOfMaterialsApi->getBillOfMaterialsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id that needs to be fetched | |

### Return type

[**\OpenAPI\Client\Model\BillOfMaterials**](../Model/BillOfMaterials.md)

### Authorization

[api_key](../../README.md#api_key), [main_auth](../../README.md#main_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillofMaterials()`

```php
getBillofMaterials($limit, $offset, $order_direction): \OpenAPI\Client\Model\BillOfMaterials
```

Get bill of materials

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


$apiInstance = new OpenAPI\Client\Api\BillOfMaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 3.4; // float | The number of items to bill of materials
$offset = 3.4; // float | Filter users without email
$order_direction = 'order_direction_example'; // string | Direction to bill of materials accounts

try {
    $result = $apiInstance->getBillofMaterials($limit, $offset, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillOfMaterialsApi->getBillofMaterials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **float**| The number of items to bill of materials | |
| **offset** | **float**| Filter users without email | |
| **order_direction** | **string**| Direction to bill of materials accounts | |

### Return type

[**\OpenAPI\Client\Model\BillOfMaterials**](../Model/BillOfMaterials.md)

### Authorization

[api_key](../../README.md#api_key), [main_auth](../../README.md#main_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBillOfMaterials()`

```php
updateBillOfMaterials($id, $bill_of_materials)
```

Updated bill of materials

This can only be done by the logged in user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: main_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillOfMaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id that needs to be updated
$bill_of_materials = new \OpenAPI\Client\Model\BillOfMaterials(); // \OpenAPI\Client\Model\BillOfMaterials | Updated bill of materials object

try {
    $apiInstance->updateBillOfMaterials($id, $bill_of_materials);
} catch (Exception $e) {
    echo 'Exception when calling BillOfMaterialsApi->updateBillOfMaterials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The id that needs to be updated | |
| **bill_of_materials** | [**\OpenAPI\Client\Model\BillOfMaterials**](../Model/BillOfMaterials.md)| Updated bill of materials object | |

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
