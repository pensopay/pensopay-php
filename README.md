# OpenAPIClient-php

Create and manage your Payments

For more information, please visit [https://help.pensopay.com/hc/da](https://help.pensopay.com/hc/da).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: default
$config = Pensopay\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pensopay\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccount: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.pensopay.com/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**getAccount**](docs/Api/AccountApi.md#getaccount) | **GET** /account | Get account details
*FeesApi* | [**createANewFee**](docs/Api/FeesApi.md#createanewfee) | **POST** /fees | Create a new fee
*FeesApi* | [**deleteAFee**](docs/Api/FeesApi.md#deleteafee) | **DELETE** /fees/{fee} | Delete a fee
*FeesApi* | [**getAFee**](docs/Api/FeesApi.md#getafee) | **GET** /fees/{fee} | Get a single fee
*FeesApi* | [**getAListOfFees**](docs/Api/FeesApi.md#getalistoffees) | **GET** /fees | Get auto-fees configured for account
*FeesApi* | [**testFees**](docs/Api/FeesApi.md#testfees) | **POST** /fees/test | Test fees for account
*FeesApi* | [**updateAFee**](docs/Api/FeesApi.md#updateafee) | **PATCH** /fees/{fee} | Update a fee
*HealthcheckApi* | [**pingGet**](docs/Api/HealthcheckApi.md#pingget) | **GET** /ping | Healthcheck
*HealthcheckApi* | [**pingPost**](docs/Api/HealthcheckApi.md#pingpost) | **POST** /ping | Healthcheck
*MethodsApi* | [**getMethods**](docs/Api/MethodsApi.md#getmethods) | **GET** /methods | Get methods for account
*MethodsApi* | [**getMobilepayLogo**](docs/Api/MethodsApi.md#getmobilepaylogo) | **GET** /methods/mobilepay/logo | Get account logo
*MethodsApi* | [**putMobilepayLogo**](docs/Api/MethodsApi.md#putmobilepaylogo) | **PUT** /methods/mobilepay/logo | Upload account logo
*PaymentsApi* | [**anonymizePayment**](docs/Api/PaymentsApi.md#anonymizepayment) | **POST** /payments/{id}/anonymize | Anonymize payment
*PaymentsApi* | [**cancelPayment**](docs/Api/PaymentsApi.md#cancelpayment) | **POST** /payments/{id}/cancel | Cancel payment
*PaymentsApi* | [**capturePayment**](docs/Api/PaymentsApi.md#capturepayment) | **POST** /payments/{id}/capture | Capture payment
*PaymentsApi* | [**createPayment**](docs/Api/PaymentsApi.md#createpayment) | **POST** /payments | Create new payment
*PaymentsApi* | [**getPayment**](docs/Api/PaymentsApi.md#getpayment) | **GET** /payments/{id} | Get single payment
*PaymentsApi* | [**getPaymentEvents**](docs/Api/PaymentsApi.md#getpaymentevents) | **GET** /payments/{id}/events | Get events for a given payment
*PaymentsApi* | [**getPayments**](docs/Api/PaymentsApi.md#getpayments) | **GET** /payments | Get payments
*PaymentsApi* | [**refundPayment**](docs/Api/PaymentsApi.md#refundpayment) | **POST** /payments/{id}/refund | Refund payment
*RulesApi* | [**createRule**](docs/Api/RulesApi.md#createrule) | **POST** /rules | 
*RulesApi* | [**deleteRule**](docs/Api/RulesApi.md#deleterule) | **DELETE** /rules/{id} | 
*RulesApi* | [**getRules**](docs/Api/RulesApi.md#getrules) | **GET** /rules | 
*RulesApi* | [**updateRule**](docs/Api/RulesApi.md#updaterule) | **PATCH** /rules/{id} | 
*SettlementApi* | [**getSettlement**](docs/Api/SettlementApi.md#getsettlement) | **GET** /settlements/{settlementId} | Get Settlement
*SettlementApi* | [**getSettlements**](docs/Api/SettlementApi.md#getsettlements) | **GET** /settlements | Get settlements
*SettlementApi* | [**getTransactionsBySettlement**](docs/Api/SettlementApi.md#gettransactionsbysettlement) | **GET** /settlements/{settlementId}/transactions | Get Settlement Transactions
*SubscriptionsApi* | [**cancelSubscription**](docs/Api/SubscriptionsApi.md#cancelsubscription) | **POST** /subscriptions/{subscription}/cancel | Cancel subscription
*SubscriptionsApi* | [**createANewMandate**](docs/Api/SubscriptionsApi.md#createanewmandate) | **POST** /subscriptions/{subscription}/mandates | Create a new mandate
*SubscriptionsApi* | [**createANewSubscription**](docs/Api/SubscriptionsApi.md#createanewsubscription) | **POST** /subscriptions | Create a new subscription
*SubscriptionsApi* | [**createPayment1**](docs/Api/SubscriptionsApi.md#createpayment1) | **POST** /subscriptions/{subscription}/payments | Create payment
*SubscriptionsApi* | [**getAListOfMandates**](docs/Api/SubscriptionsApi.md#getalistofmandates) | **GET** /subscriptions/{subscription}/mandates | Get a list of mandates
*SubscriptionsApi* | [**getAListOfSubscriptions**](docs/Api/SubscriptionsApi.md#getalistofsubscriptions) | **GET** /subscriptions | Get a list of subscriptions
*SubscriptionsApi* | [**getSingleMandate**](docs/Api/SubscriptionsApi.md#getsinglemandate) | **GET** /subscriptions/{subscription}/mandates/{mandate} | Get single mandate
*SubscriptionsApi* | [**getSingleSubscription**](docs/Api/SubscriptionsApi.md#getsinglesubscription) | **GET** /subscriptions/{subscription} | Get single subscription
*SubscriptionsApi* | [**revokeAMandate**](docs/Api/SubscriptionsApi.md#revokeamandate) | **POST** /subscriptions/{subscription}/mandates/{mandate}/revoke | Revoke a mandate
*SubscriptionsApi* | [**updateASubscription**](docs/Api/SubscriptionsApi.md#updateasubscription) | **PATCH** /subscriptions/{subscription} | Update a subscription

## Models

- [Account](docs/Model/Account.md)
- [ConditionBase](docs/Model/ConditionBase.md)
- [CreateFeeRequest](docs/Model/CreateFeeRequest.md)
- [CreateSubscriptionRequest](docs/Model/CreateSubscriptionRequest.md)
- [ErrorMessage](docs/Model/ErrorMessage.md)
- [FeeResponse](docs/Model/FeeResponse.md)
- [GetAListOfFees200Response](docs/Model/GetAListOfFees200Response.md)
- [GetAListOfMandates200Response](docs/Model/GetAListOfMandates200Response.md)
- [GetAListOfSubscriptions200Response](docs/Model/GetAListOfSubscriptions200Response.md)
- [GetPaymentEvents200Response](docs/Model/GetPaymentEvents200Response.md)
- [GetRules200Response](docs/Model/GetRules200Response.md)
- [MandateBase](docs/Model/MandateBase.md)
- [MandateMeta](docs/Model/MandateMeta.md)
- [MandateResponse](docs/Model/MandateResponse.md)
- [Methods](docs/Model/Methods.md)
- [NewMandate](docs/Model/NewMandate.md)
- [NewRule](docs/Model/NewRule.md)
- [Pagination](docs/Model/Pagination.md)
- [PaymentBase](docs/Model/PaymentBase.md)
- [PaymentCapturePaymentRequest](docs/Model/PaymentCapturePaymentRequest.md)
- [PaymentCreatePaymentRequest](docs/Model/PaymentCreatePaymentRequest.md)
- [PaymentEvent](docs/Model/PaymentEvent.md)
- [PaymentMeta](docs/Model/PaymentMeta.md)
- [PaymentPaymentAddress](docs/Model/PaymentPaymentAddress.md)
- [PaymentPaymentBasket](docs/Model/PaymentPaymentBasket.md)
- [PaymentPaymentOrder](docs/Model/PaymentPaymentOrder.md)
- [PaymentPaymentResponse](docs/Model/PaymentPaymentResponse.md)
- [PaymentPaymentsMeta](docs/Model/PaymentPaymentsMeta.md)
- [PaymentPaymentsResponse](docs/Model/PaymentPaymentsResponse.md)
- [PaymentRefundPaymentRequest](docs/Model/PaymentRefundPaymentRequest.md)
- [PaymentResponse](docs/Model/PaymentResponse.md)
- [PaymentShipping](docs/Model/PaymentShipping.md)
- [ResponseMeta](docs/Model/ResponseMeta.md)
- [RuleBase](docs/Model/RuleBase.md)
- [RuleResponse](docs/Model/RuleResponse.md)
- [Settlement](docs/Model/Settlement.md)
- [SettlementFees](docs/Model/SettlementFees.md)
- [SettlementPayoutReserve](docs/Model/SettlementPayoutReserve.md)
- [SettlementPeriod](docs/Model/SettlementPeriod.md)
- [SettlementPosting](docs/Model/SettlementPosting.md)
- [SettlementResponse](docs/Model/SettlementResponse.md)
- [SettlementSummary](docs/Model/SettlementSummary.md)
- [SettlementsResponse](docs/Model/SettlementsResponse.md)
- [SubscriptionBase](docs/Model/SubscriptionBase.md)
- [SubscriptionMeta](docs/Model/SubscriptionMeta.md)
- [SubscriptionResponse](docs/Model/SubscriptionResponse.md)
- [TestFeeRequest](docs/Model/TestFeeRequest.md)
- [TestFeeResponse](docs/Model/TestFeeResponse.md)
- [TransactionResponse](docs/Model/TransactionResponse.md)
- [TransactionResponseSettlement](docs/Model/TransactionResponseSettlement.md)
- [TransactionSettlement](docs/Model/TransactionSettlement.md)
- [TransactionSettlementFeeDetail](docs/Model/TransactionSettlementFeeDetail.md)
- [TransactionsResponse](docs/Model/TransactionsResponse.md)
- [UpdateFeeRequest](docs/Model/UpdateFeeRequest.md)
- [UpdateRule](docs/Model/UpdateRule.md)
- [UpdateSubscriptionRequest](docs/Model/UpdateSubscriptionRequest.md)

## Authorization

Authentication schemes defined for the API:
### default

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@pensopay.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0.0`
    - Generator version: `7.8.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
