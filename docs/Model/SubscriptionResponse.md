# # SubscriptionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** |  | [optional]
**currency** | **string** |  | [optional]
**description** | **string** |  | [optional]
**callback_url** | **string** | All callbacks related to the subscription (incl. mandate &amp; payment), will be sent to this url. | [optional]
**success_url** | **string** |  | [optional]
**cancel_url** | **string** |  | [optional]
**mandate_id** | **int** |  | [optional]
**methods** | **string[]** | The following payment methods can be defined as available when creating the payment. _Ex._ if &#x60;[\&quot;card\&quot;]&#x60; is sent all available card methods for the account will be available.  **card** - mastercard - visa | [optional]
**variables** | **array<string,string>** |  | [optional]
**id** | **int** |  |
**state** | **string** |  |
**link** | **string** |  |
**created_at** | **string** |  |
**updated_at** | **string** |  |
**reference** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
