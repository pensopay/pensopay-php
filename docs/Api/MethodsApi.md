# PensoPay\Client\MethodsApi

All URIs are relative to https://api.pensopay.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMethods()**](MethodsApi.md#getMethods) | **GET** /methods | Get methods for account |
| [**getMobilepayLogo()**](MethodsApi.md#getMobilepayLogo) | **GET** /methods/mobilepay/logo | Get account logo |
| [**putMobilepayLogo()**](MethodsApi.md#putMobilepayLogo) | **PUT** /methods/mobilepay/logo | Upload account logo |


## `getMethods()`

```php
getMethods(): \PensoPay\Client\Model\Methods
```

Get methods for account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = PensoPay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PensoPay\Client\Api\MethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMethods();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MethodsApi->getMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PensoPay\Client\Model\Methods**](../Model/Methods.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMobilepayLogo()`

```php
getMobilepayLogo(): \SplFileObject
```

Get account logo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = PensoPay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PensoPay\Client\Api\MethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMobilepayLogo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MethodsApi->getMobilepayLogo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\SplFileObject**

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/png`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putMobilepayLogo()`

```php
putMobilepayLogo($body): \SplFileObject
```

Upload account logo

Image must be PNG with dimensions 250 x 250 pixels

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = PensoPay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PensoPay\Client\Api\MethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->putMobilepayLogo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MethodsApi->putMobilepayLogo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **\SplFileObject****\SplFileObject**|  | |

### Return type

**\SplFileObject**

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `image/png`
- **Accept**: `image/png`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
