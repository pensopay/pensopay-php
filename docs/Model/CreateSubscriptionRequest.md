# # CreateSubscriptionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference** | **string** |  |
**amount** | **int** |  |
**currency** | **string** |  |
**description** | **string** |  |
**callback_url** | **string** | All callbacks related to the subscription (incl. mandate &amp; payment), will be sent to this url. | [optional]
**testmode** | **bool** |  | [optional]
**success_url** | **string** |  | [optional]
**cancel_url** | **string** |  | [optional]
**methods** | **string[]** | Payment methods that will be available for the subscription.   - card   - mobilepay   - applepay   - googlepay | [optional]
**variables** | **array<string,string>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
