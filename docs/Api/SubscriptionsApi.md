# Pensopay\Client\SubscriptionsApi

All URIs are relative to https://api.pensopay.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelSubscription()**](SubscriptionsApi.md#cancelSubscription) | **POST** /subscriptions/{subscription}/cancel | Cancel subscription |
| [**createANewMandate()**](SubscriptionsApi.md#createANewMandate) | **POST** /subscriptions/{subscription}/mandates | Create a new mandate |
| [**createANewSubscription()**](SubscriptionsApi.md#createANewSubscription) | **POST** /subscriptions | Create a new subscription |
| [**createPayment1()**](SubscriptionsApi.md#createPayment1) | **POST** /subscriptions/{subscription}/payments | Create payment |
| [**getAListOfMandates()**](SubscriptionsApi.md#getAListOfMandates) | **GET** /subscriptions/{subscription}/mandates | Get a list of mandates |
| [**getAListOfPayments()**](SubscriptionsApi.md#getAListOfPayments) | **GET** /subscriptions/{subscription}/payments | Get payments |
| [**getAListOfSubscriptions()**](SubscriptionsApi.md#getAListOfSubscriptions) | **GET** /subscriptions | Get a list of subscriptions |
| [**getSingleMandate()**](SubscriptionsApi.md#getSingleMandate) | **GET** /subscriptions/{subscription}/mandates/{mandate} | Get single mandate |
| [**getSingleSubscription()**](SubscriptionsApi.md#getSingleSubscription) | **GET** /subscriptions/{subscription} | Get single subscription |
| [**revokeAMandate()**](SubscriptionsApi.md#revokeAMandate) | **POST** /subscriptions/{subscription}/mandates/{mandate}/revoke | Revoke a mandate |
| [**updateASubscription()**](SubscriptionsApi.md#updateASubscription) | **PATCH** /subscriptions/{subscription} | Update a subscription |


## `cancelSubscription()`

```php
cancelSubscription($subscription): \Pensopay\Client\Model\SubscriptionResponse
```

Cancel subscription

Cancelling a Subscription is irreversible. It will no longer be possible to create Mandates or Payments for the Subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription = 56; // int | The subscription ID.

try {
    $result = $apiInstance->cancelSubscription($subscription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->cancelSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription** | **int**| The subscription ID. | |

### Return type

[**\Pensopay\Client\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createANewMandate()`

```php
createANewMandate($subscription, $new_mandate): \Pensopay\Client\Model\MandateResponse
```

Create a new mandate

Create a new mandate for subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription = 56; // int | Subscription ID.
$new_mandate = new \Pensopay\Client\Model\NewMandate(); // \Pensopay\Client\Model\NewMandate

try {
    $result = $apiInstance->createANewMandate($subscription, $new_mandate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->createANewMandate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription** | **int**| Subscription ID. | |
| **new_mandate** | [**\Pensopay\Client\Model\NewMandate**](../Model/NewMandate.md)|  | |

### Return type

[**\Pensopay\Client\Model\MandateResponse**](../Model/MandateResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createANewSubscription()`

```php
createANewSubscription($create_subscription_request): \Pensopay\Client\Model\SubscriptionResponse
```

Create a new subscription

Create a new Subscription, with a Mandate. The response will contain a payment-link - that will activate the Mandate on the Subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_subscription_request = new \Pensopay\Client\Model\CreateSubscriptionRequest(); // \Pensopay\Client\Model\CreateSubscriptionRequest

try {
    $result = $apiInstance->createANewSubscription($create_subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->createANewSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_subscription_request** | [**\Pensopay\Client\Model\CreateSubscriptionRequest**](../Model/CreateSubscriptionRequest.md)|  | |

### Return type

[**\Pensopay\Client\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPayment1()`

```php
createPayment1($subscription, $payment_base): \Pensopay\Client\Model\PaymentResponse
```

Create payment

When creating a new Subscription you can define a Mandate to use or just use the first active Mandate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription = 56; // int | The subscription ID.
$payment_base = new \Pensopay\Client\Model\PaymentBase(); // \Pensopay\Client\Model\PaymentBase

try {
    $result = $apiInstance->createPayment1($subscription, $payment_base);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->createPayment1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription** | **int**| The subscription ID. | |
| **payment_base** | [**\Pensopay\Client\Model\PaymentBase**](../Model/PaymentBase.md)|  | |

### Return type

[**\Pensopay\Client\Model\PaymentResponse**](../Model/PaymentResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAListOfMandates()`

```php
getAListOfMandates($subscription, $per_page, $page): \Pensopay\Client\Model\GetAListOfMandates200Response
```

Get a list of mandates

All mandates related to the Subscription given.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription = 56; // int | Subscription ID.
$per_page = 100; // int | How many results to list per page between 1 and 100, defaults to 15.
$page = 1; // int | What page to view.

try {
    $result = $apiInstance->getAListOfMandates($subscription, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getAListOfMandates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription** | **int**| Subscription ID. | |
| **per_page** | **int**| How many results to list per page between 1 and 100, defaults to 15. | [optional] |
| **page** | **int**| What page to view. | [optional] |

### Return type

[**\Pensopay\Client\Model\GetAListOfMandates200Response**](../Model/GetAListOfMandates200Response.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAListOfPayments()`

```php
getAListOfPayments($subscription, $order_id, $per_page, $page, $currency, $date_from, $date_to, $updated_after, $updated_before): \Pensopay\Client\Model\PaymentPaymentsResponse
```

Get payments

Fetch all payments for the subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription = 56; // int | The subscription ID.
$order_id = 'order_id_example'; // string | Find payments matching order_id
$per_page = 56; // int | How many results to list per page between 1 and 100, defaults to 15.
$page = 56; // int | What page to view.
$currency = 'currency_example'; // string | Find payments with currency
$date_from = 'date_from_example'; // string | Find payments created after date_from, takes an iso-8601 date or datetime string
$date_to = 'date_to_example'; // string | Find payments created before or until date_to, takes an iso-8601 date or datetime string
$updated_after = 'updated_after_example'; // string | Find payment updated after
$updated_before = 'updated_before_example'; // string | Find payment updated before

try {
    $result = $apiInstance->getAListOfPayments($subscription, $order_id, $per_page, $page, $currency, $date_from, $date_to, $updated_after, $updated_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getAListOfPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription** | **int**| The subscription ID. | |
| **order_id** | **string**| Find payments matching order_id | [optional] |
| **per_page** | **int**| How many results to list per page between 1 and 100, defaults to 15. | [optional] |
| **page** | **int**| What page to view. | [optional] |
| **currency** | **string**| Find payments with currency | [optional] |
| **date_from** | **string**| Find payments created after date_from, takes an iso-8601 date or datetime string | [optional] |
| **date_to** | **string**| Find payments created before or until date_to, takes an iso-8601 date or datetime string | [optional] |
| **updated_after** | **string**| Find payment updated after | [optional] |
| **updated_before** | **string**| Find payment updated before | [optional] |

### Return type

[**\Pensopay\Client\Model\PaymentPaymentsResponse**](../Model/PaymentPaymentsResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAListOfSubscriptions()`

```php
getAListOfSubscriptions($per_page, $page): \Pensopay\Client\Model\GetAListOfSubscriptions200Response
```

Get a list of subscriptions

Returns all subscriptions on the Account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$per_page = 100; // int | How many results to list per page between 1 and 100, defaults to 15.
$page = 1; // int | What page to view.

try {
    $result = $apiInstance->getAListOfSubscriptions($per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getAListOfSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **per_page** | **int**| How many results to list per page between 1 and 100, defaults to 15. | [optional] |
| **page** | **int**| What page to view. | [optional] |

### Return type

[**\Pensopay\Client\Model\GetAListOfSubscriptions200Response**](../Model/GetAListOfSubscriptions200Response.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSingleMandate()`

```php
getSingleMandate($subscription, $mandate): \Pensopay\Client\Model\MandateResponse
```

Get single mandate

Get single Mandate by Subscription and Mandate ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription = 56; // int | Subscription ID.
$mandate = 56; // int | Mandate ID.

try {
    $result = $apiInstance->getSingleMandate($subscription, $mandate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSingleMandate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription** | **int**| Subscription ID. | |
| **mandate** | **int**| Mandate ID. | |

### Return type

[**\Pensopay\Client\Model\MandateResponse**](../Model/MandateResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSingleSubscription()`

```php
getSingleSubscription($subscription): \Pensopay\Client\Model\SubscriptionResponse
```

Get single subscription

Returns a single subscription by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription = 56; // int | The subscription ID.

try {
    $result = $apiInstance->getSingleSubscription($subscription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSingleSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription** | **int**| The subscription ID. | |

### Return type

[**\Pensopay\Client\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeAMandate()`

```php
revokeAMandate($subscription, $mandate): \Pensopay\Client\Model\MandateResponse
```

Revoke a mandate

Revoke mandate, making it unavailable for use. Only active mandates can be revoked.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription = 56; // int | Subscription ID.
$mandate = 56; // int | Mandate ID.

try {
    $result = $apiInstance->revokeAMandate($subscription, $mandate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->revokeAMandate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription** | **int**| Subscription ID. | |
| **mandate** | **int**| Mandate ID. | |

### Return type

[**\Pensopay\Client\Model\MandateResponse**](../Model/MandateResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateASubscription()`

```php
updateASubscription($subscription, $update_subscription_request): \Pensopay\Client\Model\SubscriptionResponse
```

Update a subscription

Some properties on a subscription can be altered after creation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription = 56; // int | The subscription ID.
$update_subscription_request = new \Pensopay\Client\Model\UpdateSubscriptionRequest(); // \Pensopay\Client\Model\UpdateSubscriptionRequest

try {
    $result = $apiInstance->updateASubscription($subscription, $update_subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->updateASubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription** | **int**| The subscription ID. | |
| **update_subscription_request** | [**\Pensopay\Client\Model\UpdateSubscriptionRequest**](../Model/UpdateSubscriptionRequest.md)|  | |

### Return type

[**\Pensopay\Client\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
