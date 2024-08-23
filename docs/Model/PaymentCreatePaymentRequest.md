# # PaymentCreatePaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | The amount in currency&#39;s lowest denominator |
**autocapture** | **bool** |  | [optional]
**branding_id** | **string** |  | [optional]
**callback_url** | **string** |  | [optional]
**cancel_url** | **string** |  | [optional]
**currency** | **string** | The currency in ISO 4217 format |
**locale** | **string** | Locale to use in payment window | [optional]
**methods** | **string[]** | The methods allowed for the payment   - card   - mobilepay   - applepay   - anyday   - viabill   - swish   - klarna | [optional]
**order** | [**\PensoPay\Client\Model\PaymentPaymentOrder**](PaymentPaymentOrder.md) |  | [optional]
**order_id** | **string** |  |
**success_url** | **string** |  | [optional]
**testmode** | **bool** |  | [optional]
**variables** | **array<string,string>** |  | [optional]
**branding_uuid** | **string** | UUID of branding to use on payment window | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
