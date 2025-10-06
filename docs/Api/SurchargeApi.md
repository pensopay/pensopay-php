# Pensopay\Client\SurchargeApi

All URIs are relative to https://api.pensopay.com/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createANewRule()**](SurchargeApi.md#createANewRule) | **POST** /surcharge | Create a new rule |
| [**deleteARule()**](SurchargeApi.md#deleteARule) | **DELETE** /surcharge/{rule} | Delete a rule |
| [**getAListOfRules()**](SurchargeApi.md#getAListOfRules) | **GET** /surcharge | Get surcharge configuration for account |
| [**getARule()**](SurchargeApi.md#getARule) | **GET** /surcharge/{rule} | Get a single rule |
| [**testRules()**](SurchargeApi.md#testRules) | **POST** /surcharge/test | Test surcharge for account |
| [**updateARule()**](SurchargeApi.md#updateARule) | **PATCH** /surcharge/{rule} | Update a rule |


## `createANewRule()`

```php
createANewRule($create_rule_request): \Pensopay\Client\Model\RuleResponse1
```

Create a new rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\SurchargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_rule_request = new \Pensopay\Client\Model\CreateRuleRequest(); // \Pensopay\Client\Model\CreateRuleRequest

try {
    $result = $apiInstance->createANewRule($create_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurchargeApi->createANewRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_rule_request** | [**\Pensopay\Client\Model\CreateRuleRequest**](../Model/CreateRuleRequest.md)|  | |

### Return type

[**\Pensopay\Client\Model\RuleResponse1**](../Model/RuleResponse1.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteARule()`

```php
deleteARule($rule)
```

Delete a rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\SurchargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule = 56; // int | The Rule ID.

try {
    $apiInstance->deleteARule($rule);
} catch (Exception $e) {
    echo 'Exception when calling SurchargeApi->deleteARule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rule** | **int**| The Rule ID. | |

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

## `getAListOfRules()`

```php
getAListOfRules($per_page, $page): \Pensopay\Client\Model\GetAListOfRules200Response
```

Get surcharge configuration for account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\SurchargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$per_page = 100; // int | How many results to list per page between 1 and 100, defaults to 15.
$page = 1; // int | What page to view.

try {
    $result = $apiInstance->getAListOfRules($per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurchargeApi->getAListOfRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **per_page** | **int**| How many results to list per page between 1 and 100, defaults to 15. | [optional] |
| **page** | **int**| What page to view. | [optional] |

### Return type

[**\Pensopay\Client\Model\GetAListOfRules200Response**](../Model/GetAListOfRules200Response.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getARule()`

```php
getARule($rule): \Pensopay\Client\Model\RuleResponse1
```

Get a single rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\SurchargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule = 56; // int | The Rule ID.

try {
    $result = $apiInstance->getARule($rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurchargeApi->getARule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rule** | **int**| The Rule ID. | |

### Return type

[**\Pensopay\Client\Model\RuleResponse1**](../Model/RuleResponse1.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testRules()`

```php
testRules($test_rules_request): \Pensopay\Client\Model\TestRulesResponse
```

Test surcharge for account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\SurchargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test_rules_request = new \Pensopay\Client\Model\TestRulesRequest(); // \Pensopay\Client\Model\TestRulesRequest

try {
    $result = $apiInstance->testRules($test_rules_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurchargeApi->testRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **test_rules_request** | [**\Pensopay\Client\Model\TestRulesRequest**](../Model/TestRulesRequest.md)|  | |

### Return type

[**\Pensopay\Client\Model\TestRulesResponse**](../Model/TestRulesResponse.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateARule()`

```php
updateARule($rule, $update_rule_request): \Pensopay\Client\Model\RuleResponse1
```

Update a rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\SurchargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule = 56; // int | The Rule ID.
$update_rule_request = new \Pensopay\Client\Model\UpdateRuleRequest(); // \Pensopay\Client\Model\UpdateRuleRequest

try {
    $result = $apiInstance->updateARule($rule, $update_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurchargeApi->updateARule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rule** | **int**| The Rule ID. | |
| **update_rule_request** | [**\Pensopay\Client\Model\UpdateRuleRequest**](../Model/UpdateRuleRequest.md)|  | |

### Return type

[**\Pensopay\Client\Model\RuleResponse1**](../Model/RuleResponse1.md)

### Authorization

[default](../../README.md#default)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
