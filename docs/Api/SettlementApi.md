# Pensopay\Client\SettlementApi

All URIs are relative to https://api.pensopay.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSettlement()**](SettlementApi.md#getSettlement) | **GET** /settlements/{settlementId} | Get Settlement |
| [**getSettlements()**](SettlementApi.md#getSettlements) | **GET** /settlements | Get settlements |
| [**getTransactionsBySettlement()**](SettlementApi.md#getTransactionsBySettlement) | **GET** /settlements/{settlementId}/transactions | Get Settlement Transactions |


## `getSettlement()`

```php
getSettlement($settlement_id): \Pensopay\Client\Model\SettlementResponse
```

Get Settlement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\SettlementApi(
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

[**\Pensopay\Client\Model\SettlementResponse**](../Model/SettlementResponse.md)

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
getSettlements($per_page, $page, $settled, $currency, $date_from, $date_to): \Pensopay\Client\Model\SettlementsResponse
```

Get settlements

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\SettlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$per_page = 10; // int | How many results to list per page between 1 and 100.
$page = 1; // int | What page to view
$settled = 'settled_example'; // bool | Filter by settled status, true or false.
$currency = DKK; // string | Currency Code (ISO-4217).
$date_from = 2024-08-20; // string | Find settlements with payout date after or during date_from. Takes an ISO-8601 date string.
$date_to = 2024-08-20; // string | Find settlements with payout date before or during date_to. Takes an ISO-8601 date string.

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
| **per_page** | **int**| How many results to list per page between 1 and 100. | [optional] [default to 10] |
| **page** | **int**| What page to view | [optional] [default to 1] |
| **settled** | **bool**| Filter by settled status, true or false. | [optional] |
| **currency** | **string**| Currency Code (ISO-4217). | [optional] |
| **date_from** | **string**| Find settlements with payout date after or during date_from. Takes an ISO-8601 date string. | [optional] |
| **date_to** | **string**| Find settlements with payout date before or during date_to. Takes an ISO-8601 date string. | [optional] |

### Return type

[**\Pensopay\Client\Model\SettlementsResponse**](../Model/SettlementsResponse.md)

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
getTransactionsBySettlement($settlement_id, $per_page, $page, $is, $currency, $status): \Pensopay\Client\Model\TransactionsResponse
```

Get Settlement Transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\SettlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settlement_id = 'settlement_id_example'; // string | Settlement ID
$per_page = 10; // int | How many results to list per page between 1 and 100.
$page = 1; // int | What page to view
$is = 'is_example'; // string | Filter by transaction type.
$currency = DKK; // string | Currency Code (ISO-4217).
$status = 'status_example'; // string | The status of the transaction

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
| **per_page** | **int**| How many results to list per page between 1 and 100. | [optional] [default to 10] |
| **page** | **int**| What page to view | [optional] [default to 1] |
| **is** | **string**| Filter by transaction type. | [optional] |
| **currency** | **string**| Currency Code (ISO-4217). | [optional] |
| **status** | **string**| The status of the transaction | [optional] |

### Return type

[**\Pensopay\Client\Model\TransactionsResponse**](../Model/TransactionsResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
