# PensoPay\Client\SettlementApi

All URIs are relative to https://api.pensopay.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSettlement()**](SettlementApi.md#getSettlement) | **GET** /settlements/{settlementId} | Get Settlement |
| [**getSettlements()**](SettlementApi.md#getSettlements) | **GET** /settlements | Get settlements |
| [**getTransactionsBySettlement()**](SettlementApi.md#getTransactionsBySettlement) | **GET** /settlements/{settlementId}/transactions | Get Settlement Transactions |


## `getSettlement()`

```php
getSettlement($settlement_id): \PensoPay\Client\Model\SettlementResponse
```

Get Settlement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = PensoPay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PensoPay\Client\Api\SettlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settlement_id = 'settlement_id_example'; // string | Settlement ID

try {
    $result = $apiInstance->getSettlement($settlement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementApi->getSettlement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **settlement_id** | **string**| Settlement ID | |

### Return type

[**\PensoPay\Client\Model\SettlementResponse**](../Model/SettlementResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSettlements()`

```php
getSettlements($per_page, $page, $settled, $currency, $date_from, $date_to): \PensoPay\Client\Model\SettlementsResponse
```

Get settlements

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = PensoPay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PensoPay\Client\Api\SettlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$per_page = 56; // int | 
$page = 56; // int | 
$settled = 'settled_example'; // string | 
$currency = 'currency_example'; // string | 
$date_from = 'date_from_example'; // string | 
$date_to = 'date_to_example'; // string | 

try {
    $result = $apiInstance->getSettlements($per_page, $page, $settled, $currency, $date_from, $date_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementApi->getSettlements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **per_page** | **int**|  | [optional] |
| **page** | **int**|  | [optional] |
| **settled** | **string**|  | [optional] |
| **currency** | **string**|  | [optional] |
| **date_from** | **string**|  | [optional] |
| **date_to** | **string**|  | [optional] |

### Return type

[**\PensoPay\Client\Model\SettlementsResponse**](../Model/SettlementsResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionsBySettlement()`

```php
getTransactionsBySettlement($settlement_id, $per_page, $page, $is, $currency, $status): \PensoPay\Client\Model\TransactionsResponse
```

Get Settlement Transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = PensoPay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PensoPay\Client\Api\SettlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settlement_id = 'settlement_id_example'; // string | Settlement ID
$per_page = 56; // int | 
$page = 56; // int | 
$is = 'is_example'; // string | 
$currency = 'currency_example'; // string | 
$status = 'status_example'; // string | 

try {
    $result = $apiInstance->getTransactionsBySettlement($settlement_id, $per_page, $page, $is, $currency, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementApi->getTransactionsBySettlement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **settlement_id** | **string**| Settlement ID | |
| **per_page** | **int**|  | [optional] |
| **page** | **int**|  | [optional] |
| **is** | **string**|  | [optional] |
| **currency** | **string**|  | [optional] |
| **status** | **string**|  | [optional] |

### Return type

[**\PensoPay\Client\Model\TransactionsResponse**](../Model/TransactionsResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
