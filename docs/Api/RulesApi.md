# PensoPay\Client\RulesApi

All URIs are relative to https://api.pensopay.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createRule()**](RulesApi.md#createRule) | **POST** /rules |  |
| [**deleteRule()**](RulesApi.md#deleteRule) | **DELETE** /rules/{id} |  |
| [**getRules()**](RulesApi.md#getRules) | **GET** /rules |  |
| [**updateRule()**](RulesApi.md#updateRule) | **PATCH** /rules/{id} |  |


## `createRule()`

```php
createRule($new_rule): \PensoPay\Client\Model\RuleResponse
```



Create a new rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = PensoPay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PensoPay\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_rule = new \PensoPay\Client\Model\NewRule(); // \PensoPay\Client\Model\NewRule

try {
    $result = $apiInstance->createRule($new_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->createRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_rule** | [**\PensoPay\Client\Model\NewRule**](../Model/NewRule.md)|  | |

### Return type

[**\PensoPay\Client\Model\RuleResponse**](../Model/RuleResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRule()`

```php
deleteRule($id)
```



Delete a rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = PensoPay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PensoPay\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id for the payment

try {
    $apiInstance->deleteRule($id);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->deleteRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Id for the payment | |

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

## `getRules()`

```php
getRules(): \PensoPay\Client\Model\GetRules200Response
```



Get list of payment rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = PensoPay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PensoPay\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRules();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->getRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PensoPay\Client\Model\GetRules200Response**](../Model/GetRules200Response.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRule()`

```php
updateRule($id, $rule_base): \PensoPay\Client\Model\RuleResponse
```



Update a rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = PensoPay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PensoPay\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id for the payment
$rule_base = new \PensoPay\Client\Model\RuleBase(); // \PensoPay\Client\Model\RuleBase

try {
    $result = $apiInstance->updateRule($id, $rule_base);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->updateRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Id for the payment | |
| **rule_base** | [**\PensoPay\Client\Model\RuleBase**](../Model/RuleBase.md)|  | |

### Return type

[**\PensoPay\Client\Model\RuleResponse**](../Model/RuleResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
