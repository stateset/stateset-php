# OpenAPI\Client\WarrantiesApi

All URIs are relative to https://api.stateset.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWarranty()**](WarrantiesApi.md#createWarranty) | **POST** /warranties | Create a new warranty |
| [**getWarranties()**](WarrantiesApi.md#getWarranties) | **GET** /warranties | Get warranties |


## `createWarranty()`

```php
createWarranty($warranty)
```

Create a new warranty

Create a new return. This can only be done by the logged in return.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: main_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WarrantiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warranty = new \OpenAPI\Client\Model\Warranty(); // \OpenAPI\Client\Model\Warranty | Created warranty object

try {
    $apiInstance->createWarranty($warranty);
} catch (Exception $e) {
    echo 'Exception when calling WarrantiesApi->createWarranty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warranty** | [**\OpenAPI\Client\Model\Warranty**](../Model/Warranty.md)| Created warranty object | |

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

## `getWarranties()`

```php
getWarranties($limit, $offset, $order_direction): \OpenAPI\Client\Model\Warranty
```

Get warranties

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


$apiInstance = new OpenAPI\Client\Api\WarrantiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 3.4; // float | The number of items to return
$offset = 3.4; // float | Filter users without email
$order_direction = 'order_direction_example'; // string | Direction to return warranties

try {
    $result = $apiInstance->getWarranties($limit, $offset, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarrantiesApi->getWarranties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **float**| The number of items to return | |
| **offset** | **float**| Filter users without email | |
| **order_direction** | **string**| Direction to return warranties | |

### Return type

[**\OpenAPI\Client\Model\Warranty**](../Model/Warranty.md)

### Authorization

[api_key](../../README.md#api_key), [main_auth](../../README.md#main_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
