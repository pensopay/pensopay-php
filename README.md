# OpenAPIClient-php

Create and manage your Payments

For more information, please visit [https://pensopay.com](https://pensopay.com).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/pensopay/pensopay-php.git"
    }
  ],
  "require": {
    "pensopay/pensopay-php": "*@dev"
  }
}
```

Then run `composer install`

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
*PaymentsApi* | [**updatePayment**](docs/Api/PaymentsApi.md#updatepayment) | **PATCH** /payments/{id} | Update Payment
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
*SubscriptionsApi* | [**getAListOfPayments**](docs/Api/SubscriptionsApi.md#getalistofpayments) | **GET** /subscriptions/{subscription}/payments | Get payments
*SubscriptionsApi* | [**getAListOfSubscriptions**](docs/Api/SubscriptionsApi.md#getalistofsubscriptions) | **GET** /subscriptions | Get a list of subscriptions
*SubscriptionsApi* | [**getSingleMandate**](docs/Api/SubscriptionsApi.md#getsinglemandate) | **GET** /subscriptions/{subscription}/mandates/{mandate} | Get single mandate
*SubscriptionsApi* | [**getSingleSubscription**](docs/Api/SubscriptionsApi.md#getsinglesubscription) | **GET** /subscriptions/{subscription} | Get single subscription
*SubscriptionsApi* | [**revokeAMandate**](docs/Api/SubscriptionsApi.md#revokeamandate) | **POST** /subscriptions/{subscription}/mandates/{mandate}/revoke | Revoke a mandate
*SubscriptionsApi* | [**updateASubscription**](docs/Api/SubscriptionsApi.md#updateasubscription) | **PATCH** /subscriptions/{subscription} | Update a subscription
*SurchargeApi* | [**createANewRule**](docs/Api/SurchargeApi.md#createanewrule) | **POST** /surcharge | Create a new rule
*SurchargeApi* | [**deleteARule**](docs/Api/SurchargeApi.md#deletearule) | **DELETE** /surcharge/{rule} | Delete a rule
*SurchargeApi* | [**getAListOfRules**](docs/Api/SurchargeApi.md#getalistofrules) | **GET** /surcharge | Get surcharge configuration for account
*SurchargeApi* | [**getARule**](docs/Api/SurchargeApi.md#getarule) | **GET** /surcharge/{rule} | Get a single rule
*SurchargeApi* | [**testRules**](docs/Api/SurchargeApi.md#testrules) | **POST** /surcharge/test | Test surcharge for account
*SurchargeApi* | [**updateARule**](docs/Api/SurchargeApi.md#updatearule) | **PATCH** /surcharge/{rule} | Update a rule

## Models

- [Account](docs/Model/Account.md)
- [ConditionBase](docs/Model/ConditionBase.md)
- [CreateRuleRequest](docs/Model/CreateRuleRequest.md)
- [CreateSubscriptionRequest](docs/Model/CreateSubscriptionRequest.md)
- [ErrorMessage](docs/Model/ErrorMessage.md)
- [ErrorMessage1](docs/Model/ErrorMessage1.md)
- [GetAListOfMandates200Response](docs/Model/GetAListOfMandates200Response.md)
- [GetAListOfRules200Response](docs/Model/GetAListOfRules200Response.md)
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
- [PaymentCallbackResource](docs/Model/PaymentCallbackResource.md)
- [PaymentCapturePaymentRequest](docs/Model/PaymentCapturePaymentRequest.md)
- [PaymentCreatePaymentRequest](docs/Model/PaymentCreatePaymentRequest.md)
- [PaymentEvent](docs/Model/PaymentEvent.md)
- [PaymentMeta](docs/Model/PaymentMeta.md)
- [PaymentPaymentAddress](docs/Model/PaymentPaymentAddress.md)
- [PaymentPaymentBasket](docs/Model/PaymentPaymentBasket.md)
- [PaymentPaymentDetails](docs/Model/PaymentPaymentDetails.md)
- [PaymentPaymentOrder](docs/Model/PaymentPaymentOrder.md)
- [PaymentPaymentResponse](docs/Model/PaymentPaymentResponse.md)
- [PaymentPaymentsMeta](docs/Model/PaymentPaymentsMeta.md)
- [PaymentPaymentsResponse](docs/Model/PaymentPaymentsResponse.md)
- [PaymentRefundPaymentRequest](docs/Model/PaymentRefundPaymentRequest.md)
- [PaymentResponse](docs/Model/PaymentResponse.md)
- [PaymentShipping](docs/Model/PaymentShipping.md)
- [PaymentUpdateRequest](docs/Model/PaymentUpdateRequest.md)
- [ResponseMeta](docs/Model/ResponseMeta.md)
- [RuleBase](docs/Model/RuleBase.md)
- [RuleResponse](docs/Model/RuleResponse.md)
- [RuleResponse1](docs/Model/RuleResponse1.md)
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
- [TestRulesRequest](docs/Model/TestRulesRequest.md)
- [TestRulesResponse](docs/Model/TestRulesResponse.md)
- [TransactionResponse](docs/Model/TransactionResponse.md)
- [TransactionSettlement](docs/Model/TransactionSettlement.md)
- [TransactionSettlementFeeDetail](docs/Model/TransactionSettlementFeeDetail.md)
- [TransactionsResponse](docs/Model/TransactionsResponse.md)
- [UpdateRule](docs/Model/UpdateRule.md)
- [UpdateRuleRequest](docs/Model/UpdateRuleRequest.md)
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

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0.0`
    - Generator version: `7.16.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
