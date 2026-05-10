# Pensopay\Client\BrandingsApi



All URIs are relative to https://api.pensopay.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBranding()**](BrandingsApi.md#createBranding) | **POST** /brandings | Create Branding |
| [**deleteBranding()**](BrandingsApi.md#deleteBranding) | **DELETE** /brandings/{id} | Delete a Branding |
| [**deleteFile()**](BrandingsApi.md#deleteFile) | **DELETE** /brandings/{id}/file | Delete a Branding file |
| [**getBranding()**](BrandingsApi.md#getBranding) | **GET** /brandings/{id} | Get a Branding |
| [**getBrandings()**](BrandingsApi.md#getBrandings) | **GET** /brandings | Get Brandings for account |
| [**getFile()**](BrandingsApi.md#getFile) | **GET** /brandings/{id}/file | Get a Branding file |
| [**updateFile()**](BrandingsApi.md#updateFile) | **PUT** /brandings/{id}/file | Save a Branding file |


## `createBranding()`

```php
createBranding($branding_branding_request): \Pensopay\Client\Model\BrandingBrandingResponse
```

Create Branding

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\BrandingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$branding_branding_request = new \Pensopay\Client\Model\BrandingBrandingRequest(); // \Pensopay\Client\Model\BrandingBrandingRequest

try {
    $result = $apiInstance->createBranding($branding_branding_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingsApi->createBranding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **branding_branding_request** | [**\Pensopay\Client\Model\BrandingBrandingRequest**](../Model/BrandingBrandingRequest.md)|  | [optional] |

### Return type

[**\Pensopay\Client\Model\BrandingBrandingResponse**](../Model/BrandingBrandingResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBranding()`

```php
deleteBranding($id)
```

Delete a Branding

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\BrandingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Id of the branding to get

try {
    $apiInstance->deleteBranding($id);
} catch (Exception $e) {
    echo 'Exception when calling BrandingsApi->deleteBranding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the branding to get | |

### Return type

void (empty response body)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFile()`

```php
deleteFile($id, $path)
```

Delete a Branding file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\BrandingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Id of the branding
$path = 'path_example'; // string | Path of the file to delete

try {
    $apiInstance->deleteFile($id, $path);
} catch (Exception $e) {
    echo 'Exception when calling BrandingsApi->deleteFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the branding | |
| **path** | **string**| Path of the file to delete | |

### Return type

void (empty response body)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBranding()`

```php
getBranding($id): \Pensopay\Client\Model\BrandingBrandingResponse
```

Get a Branding

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\BrandingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Id of the branding to get

try {
    $result = $apiInstance->getBranding($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingsApi->getBranding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the branding to get | |

### Return type

[**\Pensopay\Client\Model\BrandingBrandingResponse**](../Model/BrandingBrandingResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBrandings()`

```php
getBrandings(): \Pensopay\Client\Model\BrandingBrandingsResponse
```

Get Brandings for account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\BrandingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBrandings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingsApi->getBrandings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Pensopay\Client\Model\BrandingBrandingsResponse**](../Model/BrandingBrandingsResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFile()`

```php
getFile($id, $path): \SplFileObject
```

Get a Branding file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\BrandingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Id of the branding
$path = 'path_example'; // string | Path of the file to get

try {
    $result = $apiInstance->getFile($id, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingsApi->getFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the branding | |
| **path** | **string**| Path of the file to get | |

### Return type

**\SplFileObject**

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFile()`

```php
updateFile($id, $path, $body): \SplFileObject
```

Save a Branding file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\BrandingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Id of the branding
$path = 'path_example'; // string | Path of the file to save
$body = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->updateFile($id, $path, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingsApi->updateFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the branding | |
| **path** | **string**| Path of the file to save | |
| **body** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

**\SplFileObject**

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/octet-stream`
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
