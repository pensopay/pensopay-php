# Pensopay\Client\FeesApi

All URIs are relative to https://api.pensopay.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createANewFee()**](FeesApi.md#createANewFee) | **POST** /fees | Create a new fee |
| [**deleteAFee()**](FeesApi.md#deleteAFee) | **DELETE** /fees/{fee} | Delete a fee |
| [**getAFee()**](FeesApi.md#getAFee) | **GET** /fees/{fee} | Get a single fee |
| [**getAListOfFees()**](FeesApi.md#getAListOfFees) | **GET** /fees | Get auto-fees configured for account |
| [**testFees()**](FeesApi.md#testFees) | **POST** /fees/test | Test fees for account |
| [**updateAFee()**](FeesApi.md#updateAFee) | **PATCH** /fees/{fee} | Update a fee |


## `createANewFee()`

```php
createANewFee($create_fee_request): \Pensopay\Client\Model\FeeResponse
```

Create a new fee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_fee_request = new \Pensopay\Client\Model\CreateFeeRequest(); // \Pensopay\Client\Model\CreateFeeRequest

try {
    $result = $apiInstance->createANewFee($create_fee_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->createANewFee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_fee_request** | [**\Pensopay\Client\Model\CreateFeeRequest**](../Model/CreateFeeRequest.md)|  | |

### Return type

[**\Pensopay\Client\Model\FeeResponse**](../Model/FeeResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAFee()`

```php
deleteAFee($fee)
```

Delete a fee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fee = 56; // int | The Fee ID.

try {
    $apiInstance->deleteAFee($fee);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->deleteAFee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fee** | **int**| The Fee ID. | |

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

## `getAFee()`

```php
getAFee($fee): \Pensopay\Client\Model\FeeResponse
```

Get a single fee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fee = 56; // int | The Fee ID.

try {
    $result = $apiInstance->getAFee($fee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->getAFee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fee** | **int**| The Fee ID. | |

### Return type

[**\Pensopay\Client\Model\FeeResponse**](../Model/FeeResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAListOfFees()`

```php
getAListOfFees($per_page, $page): \Pensopay\Client\Model\GetAListOfFees200Response
```

Get auto-fees configured for account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$per_page = 100; // int | How many results to list per page between 1 and 100, defaults to 15.
$page = 1; // int | What page to view.

try {
    $result = $apiInstance->getAListOfFees($per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->getAListOfFees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **per_page** | **int**| How many results to list per page between 1 and 100, defaults to 15. | [optional] |
| **page** | **int**| What page to view. | [optional] |

### Return type

[**\Pensopay\Client\Model\GetAListOfFees200Response**](../Model/GetAListOfFees200Response.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testFees()`

```php
testFees($test_fee_request): \Pensopay\Client\Model\TestFeeResponse
```

Test fees for account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test_fee_request = new \Pensopay\Client\Model\TestFeeRequest(); // \Pensopay\Client\Model\TestFeeRequest

try {
    $result = $apiInstance->testFees($test_fee_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->testFees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **test_fee_request** | [**\Pensopay\Client\Model\TestFeeRequest**](../Model/TestFeeRequest.md)|  | |

### Return type

[**\Pensopay\Client\Model\TestFeeResponse**](../Model/TestFeeResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAFee()`

```php
updateAFee($fee, $update_fee_request): \Pensopay\Client\Model\FeeResponse
```

Update a fee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fee = 56; // int | The Fee ID.
$update_fee_request = new \Pensopay\Client\Model\UpdateFeeRequest(); // \Pensopay\Client\Model\UpdateFeeRequest

try {
    $result = $apiInstance->updateAFee($fee, $update_fee_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->updateAFee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fee** | **int**| The Fee ID. | |
| **update_fee_request** | [**\Pensopay\Client\Model\UpdateFeeRequest**](../Model/UpdateFeeRequest.md)|  | |

### Return type

[**\Pensopay\Client\Model\FeeResponse**](../Model/FeeResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
