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
**methods** | **string[]** | The following payment methods can be defined as available when creating the payment. _Ex._ if &#x60;[\&quot;card\&quot;]&#x60; is sent all available card methods for the account will be available.  **card** - dankort - mastercard - visa - visadebit / visaelectron - mastercarddebit  **wallet** - mobilepay - vippspsp - googlepay - applepay  **paylater** - anyday - viabill  **thirdparty** - paypal - klarna  **banktransfer** - swish | [optional]
**order** | [**\Pensopay\Client\Model\PaymentPaymentOrder**](PaymentPaymentOrder.md) |  | [optional]
**order_id** | **string** |  |
**success_url** | **string** |  | [optional]
**testmode** | **bool** |  | [optional]
**variables** | **array<string,string>** |  | [optional]
**branding_uuid** | **string** | UUID of branding to use on payment window | [optional]
**text_on_statement** | **string** |  | [optional]
**expires_in** | **int** | Specify amount of seconds the payment will be available for the cardholder. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
