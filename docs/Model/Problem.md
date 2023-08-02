# # Problem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | A URI reference [[RFC3986](https://tools.ietf.org/html/rfc3986)] that identifies the problem type. It should provide human-readable documentation for the problem type. When this member is not present, its value is assumed to be \&quot;about:blank\&quot;. | [optional]
**title** | **string** | A short, human-readable summary of the problem type. It SHOULD NOT change from occurrence to occurrence of the problem, except for purposes of localization. | [optional]
**status** | **int** | The HTTP status code. | [optional]
**detail** | **string** | A human-readable explanation specific to this occurrence of the problem. | [optional]
**instance** | **string** | A URI reference that identifies the specific occurrence of the problem.  It may or may not yield further information if dereferenced. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
