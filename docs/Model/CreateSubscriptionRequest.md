# # CreateSubscriptionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference** | **string** |  |
**amount** | **int** |  |
**currency** | **string** |  |
**locale** | **string** | Locale to use in payment window | [optional]
**description** | **string** |  |
**callback_url** | **string** | All callbacks related to the subscription (incl. mandate &amp; payment), will be sent to this url. | [optional]
**testmode** | **bool** |  | [optional]
**success_url** | **string** |  | [optional]
**cancel_url** | **string** |  | [optional]
**methods** | **string[]** | The following payment methods can be defined as available when creating the payment. _Ex._ if &#x60;[\&quot;card\&quot;]&#x60; is sent all available card methods for the account will be available.  **card** - mastercard - visa | [optional]
**variables** | **array<string,string>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
