# # ModelReturn

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**status** | **string** | The status of the return. | [optional]
**order_id** | **string** | The order ID associated with the return. | [optional]
**rma** | **string** | The return merchandise authorization number. | [optional]
**tracking_number** | **string** | The tracking number of the returned item. | [optional]
**description** | **string** | A description of the return. | [optional]
**customer_email** | **string** | The email address of the customer who initiated the return. | [optional]
**zendesk_number** | **string** | The unique identifier of the Zendesk ticket associated with the return. | [optional]
**action_needed** | **string** | Any action required to process the return. | [optional]
**issue** | **string** | The reason for the return. | [optional]
**order_string** | **string** | The string the order was placed. | [optional]
**shipped_string** | **string** | The string the order was shipped. | [optional]
**requested_string** | **string** | The string the return was requested. | [optional]
**entered_by** | **string** | The name of the employee who entered the return into the system. | [optional]
**customer_id** | **string** | The unique identifier of the customer who initiated the return. | [optional]
**amount** | **string** | The amount of the return. | [optional]
**reported_condition** | **string** | The condition of the returned item. | [optional]
**tax_refunded** | **string** | The amount of tax refunded. | [optional]
**total_refunded** | **string** | The total amount refunded. | [optional]
**created_string** | **string** | The string the return was created. | [optional] [default to 'now()']
**reason_category** | **string** | The category of the reason for the return. | [optional]
**flat_rate_shipping** | **int** | The flat rate shipping amount. | [optional]
**refunded_string** | **string** | The string the return was refunded. | [optional]
**warehouse_received_string** | **string** | The string the return was received at the warehouse. | [optional]
**warehouse_condition_string** | **string** | The string the condition of the return was verified at the warehouse. | [optional]
**fedex_status** | **string** | The status of the return in FedEx. | [optional]
**scanned_serial_number** | **string** | The serial number of the returned item. | [optional]
**match** | **string** | Whether or not the serial number matches the order. | [optional]
**country** | **string** | The country of the customer who initiated the return. | [optional]
**serial_number** | **string** | The serial number of the returned item. | [optional]
**condition** | **string** | The condition of the returned item. | [optional]
**order_refunded** | **bool** | Whether or not the order was refunded. | [optional] [default to false]
**workflow_id** | **string** | The workflow ID associated with the return. | [optional]
**sso_id** | **string** | The unique identifier of the SSO user who initiated the return. | [optional]
**customer_email_normalized** | **string** | The normalized email address of the customer who initiated the return. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
