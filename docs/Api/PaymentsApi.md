# PensoPay\Client\PaymentsApi

All URIs are relative to https://api.pensopay.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**anonymizePayment()**](PaymentsApi.md#anonymizePayment) | **POST** /payments/{id}/anonymize | Anonymize payment |
| [**cancelPayment()**](PaymentsApi.md#cancelPayment) | **POST** /payments/{id}/cancel | Cancel payment |
| [**capturePayment()**](PaymentsApi.md#capturePayment) | **POST** /payments/{id}/capture | Capture payment |
| [**createPayment()**](PaymentsApi.md#createPayment) | **POST** /payments | Create new payment |
| [**getPayment()**](PaymentsApi.md#getPayment) | **GET** /payments/{id} | Get single payment |
| [**getPaymentEvents()**](PaymentsApi.md#getPaymentEvents) | **GET** /payments/{id}/events | Get events for a given payment |
| [**getPayments()**](PaymentsApi.md#getPayments) | **GET** /payments | Get payments |
| [**refundPayment()**](PaymentsApi.md#refundPayment) | **POST** /payments/{id}/refund | Refund payment |


## `anonymizePayment()`

```php
anonymizePayment($id): \PensoPay\Client\Model\PaymentPaymentResponse
```

Anonymize payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = PensoPay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PensoPay\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the payment to anonymize

try {
    $result = $apiInstance->anonymizePayment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->anonymizePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Id of the payment to anonymize | |

### Return type

[**\PensoPay\Client\Model\PaymentPaymentResponse**](../Model/PaymentPaymentResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelPayment()`

```php
cancelPayment($id): \PensoPay\Client\Model\PaymentPaymentResponse
```

Cancel payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = PensoPay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PensoPay\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the payment to cancel

try {
    $result = $apiInstance->cancelPayment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->cancelPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Id of the payment to cancel | |

### Return type

[**\PensoPay\Client\Model\PaymentPaymentResponse**](../Model/PaymentPaymentResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `capturePayment()`

```php
capturePayment($id, $payment_capture_payment_request): \PensoPay\Client\Model\PaymentPaymentResponse
```

Capture payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = PensoPay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PensoPay\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the payment to capture
$payment_capture_payment_request = new \PensoPay\Client\Model\PaymentCapturePaymentRequest(); // \PensoPay\Client\Model\PaymentCapturePaymentRequest | payment

try {
    $result = $apiInstance->capturePayment($id, $payment_capture_payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->capturePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Id of the payment to capture | |
| **payment_capture_payment_request** | [**\PensoPay\Client\Model\PaymentCapturePaymentRequest**](../Model/PaymentCapturePaymentRequest.md)| payment | [optional] |

### Return type

[**\PensoPay\Client\Model\PaymentPaymentResponse**](../Model/PaymentPaymentResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPayment()`

```php
createPayment($payment_create_payment_request): \PensoPay\Client\Model\PaymentPaymentResponse
```

Create new payment

Create a new payment in the pending state, once the user has paid state will change to authorized, and we'll send a callback

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = PensoPay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PensoPay\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_create_payment_request = new \PensoPay\Client\Model\PaymentCreatePaymentRequest(); // \PensoPay\Client\Model\PaymentCreatePaymentRequest | payment

try {
    $result = $apiInstance->createPayment($payment_create_payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->createPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_create_payment_request** | [**\PensoPay\Client\Model\PaymentCreatePaymentRequest**](../Model/PaymentCreatePaymentRequest.md)| payment | |

### Return type

[**\PensoPay\Client\Model\PaymentPaymentResponse**](../Model/PaymentPaymentResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayment()`

```php
getPayment($id): \PensoPay\Client\Model\PaymentPaymentResponse
```

Get single payment

Get single payment by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = PensoPay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PensoPay\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the payment to get

try {
    $result = $apiInstance->getPayment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Id of the payment to get | |

### Return type

[**\PensoPay\Client\Model\PaymentPaymentResponse**](../Model/PaymentPaymentResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentEvents()`

```php
getPaymentEvents($id, $type): \PensoPay\Client\Model\GetPaymentEvents200Response
```

Get events for a given payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = PensoPay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PensoPay\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id for the payment
$type = 'type_example'; // string | Filter events by type

try {
    $result = $apiInstance->getPaymentEvents($id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPaymentEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Id for the payment | |
| **type** | **string**| Filter events by type | [optional] |

### Return type

[**\PensoPay\Client\Model\GetPaymentEvents200Response**](../Model/GetPaymentEvents200Response.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayments()`

```php
getPayments($order_id, $per_page, $page, $currency, $date_from, $date_to, $updated_after, $updated_before): \PensoPay\Client\Model\PaymentPaymentsResponse
```

Get payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = PensoPay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PensoPay\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Find payments matching order_id
$per_page = 56; // int | How many results to list per page between 1 and 100, defaults to 15.
$page = 56; // int | What page to view.
$currency = 'currency_example'; // string | Find payments with currency
$date_from = 'date_from_example'; // string | Find payments created after date_from, takes an iso-8601 date or datetime string
$date_to = 'date_to_example'; // string | Find payments created before or until date_to, takes an iso-8601 date or datetime string
$updated_after = 'updated_after_example'; // string | Find payment updated after
$updated_before = 'updated_before_example'; // string | Find payment updated before

try {
    $result = $apiInstance->getPayments($order_id, $per_page, $page, $currency, $date_from, $date_to, $updated_after, $updated_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Find payments matching order_id | [optional] |
| **per_page** | **int**| How many results to list per page between 1 and 100, defaults to 15. | [optional] |
| **page** | **int**| What page to view. | [optional] |
| **currency** | **string**| Find payments with currency | [optional] |
| **date_from** | **string**| Find payments created after date_from, takes an iso-8601 date or datetime string | [optional] |
| **date_to** | **string**| Find payments created before or until date_to, takes an iso-8601 date or datetime string | [optional] |
| **updated_after** | **string**| Find payment updated after | [optional] |
| **updated_before** | **string**| Find payment updated before | [optional] |

### Return type

[**\PensoPay\Client\Model\PaymentPaymentsResponse**](../Model/PaymentPaymentsResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundPayment()`

```php
refundPayment($id, $payment_refund_payment_request): \PensoPay\Client\Model\PaymentPaymentResponse
```

Refund payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = PensoPay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PensoPay\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the payment to refund
$payment_refund_payment_request = new \PensoPay\Client\Model\PaymentRefundPaymentRequest(); // \PensoPay\Client\Model\PaymentRefundPaymentRequest | payment

try {
    $result = $apiInstance->refundPayment($id, $payment_refund_payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->refundPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Id of the payment to refund | |
| **payment_refund_payment_request** | [**\PensoPay\Client\Model\PaymentRefundPaymentRequest**](../Model/PaymentRefundPaymentRequest.md)| payment | [optional] |

### Return type

[**\PensoPay\Client\Model\PaymentPaymentResponse**](../Model/PaymentPaymentResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
