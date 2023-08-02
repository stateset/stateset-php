# OpenAPIClient-php

This is the Stateset One API based on The OpenAPI Specification.
# Introduction
This API definition is intended to to be a good starting point for describing your API in [OpenAPI/Swagger format](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.2.md).
# OpenAPI Specification
The goal of The OpenAPI Specification is to define a standard, language-agnostic interface to REST APIs which allows both humans and computers to discover and understand the capabilities of the service without access to source code, documentation, or through network traffic inspection. When properly defined via OpenAPI, a consumer can  understand and interact with the remote service with a minimal amount of implementation logic. Similar to what interfaces have done for lower-level programming, OpenAPI removes the guesswork in calling the service.


For more information, please visit [http://stateset.com/support](http://stateset.com/support).

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



// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

// Configure OAuth2 access token for authorization: main_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 3.4; // float | The number of items to return
$offset = 3.4; // float | Filter users without email
$order_direction = 'order_direction_example'; // string | Direction to return accounts

try {
    $result = $apiInstance->getAccountByName($limit, $offset, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountByName: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.stateset.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**getAccountByName**](docs/Api/AccountsApi.md#getaccountbyname) | **GET** /accounts | Get account by account name
*AccountsApi* | [**getAccountByName_0**](docs/Api/AccountsApi.md#getaccountbyname_0) | **GET** /accounts/{id} | Get account by account name
*BillOfMaterialsApi* | [**createBillofMaterials**](docs/Api/BillOfMaterialsApi.md#createbillofmaterials) | **POST** /billofmaterials | Create a new bill of materials
*BillOfMaterialsApi* | [**deleteBillOfMaterials**](docs/Api/BillOfMaterialsApi.md#deletebillofmaterials) | **DELETE** /billofmaterials/{id} | Delete Bill of Materials
*BillOfMaterialsApi* | [**getBillOfMaterialsById**](docs/Api/BillOfMaterialsApi.md#getbillofmaterialsbyid) | **GET** /billofmaterials/{id} | Get bill of materials by id
*BillOfMaterialsApi* | [**getBillofMaterials**](docs/Api/BillOfMaterialsApi.md#getbillofmaterials) | **GET** /billofmaterials | Get bill of materials
*BillOfMaterialsApi* | [**updateBillOfMaterials**](docs/Api/BillOfMaterialsApi.md#updatebillofmaterials) | **PUT** /billofmaterials/{id} | Updated bill of materials
*BillOfMaterialsLineItemsApi* | [**getBillOfMaterialsItemById**](docs/Api/BillOfMaterialsLineItemsApi.md#getbillofmaterialsitembyid) | **GET** /billofmaterialsitems | Get bill of materials item by id
*BillOfMaterialsLineItemsApi* | [**getBillOfMaterialsLineItemById**](docs/Api/BillOfMaterialsLineItemsApi.md#getbillofmaterialslineitembyid) | **GET** /billofmaterialsitems/{id} | Get bill of materials line item by id
*BillOfMaterialsLineItemsApi* | [**updateBillOfMaterialsLineItem**](docs/Api/BillOfMaterialsLineItemsApi.md#updatebillofmaterialslineitem) | **PUT** /billofmaterialsitems/{id} | Updated billofmaterials line item
*CustomersApi* | [**deleteCustomers**](docs/Api/CustomersApi.md#deletecustomers) | **DELETE** /customers/{id} | Delete customers
*CustomersApi* | [**getCustomers**](docs/Api/CustomersApi.md#getcustomers) | **GET** /customers | Get customer by id
*CustomersApi* | [**updateCustomers**](docs/Api/CustomersApi.md#updatecustomers) | **PUT** /customers/{id} | Update customers
*InventoryItemsApi* | [**createInventoryItems**](docs/Api/InventoryItemsApi.md#createinventoryitems) | **POST** /inventoryitems | Create a new inventory items
*InventoryItemsApi* | [**getInventoryItemById**](docs/Api/InventoryItemsApi.md#getinventoryitembyid) | **GET** /inventoryitems/{id} | Get inventory items by id
*InventoryItemsApi* | [**getInventoryItems**](docs/Api/InventoryItemsApi.md#getinventoryitems) | **GET** /inventoryitems | Get inventory items
*InventoryItemsApi* | [**updateInventoryItem**](docs/Api/InventoryItemsApi.md#updateinventoryitem) | **PUT** /inventoryitems/{id} | Updated inventory items
*ManufactureOrderLineItemsApi* | [**getManufactureItemById**](docs/Api/ManufactureOrderLineItemsApi.md#getmanufactureitembyid) | **GET** /manufactureorderitems | Get manufactureItem by id
*ManufactureOrderLineItemsApi* | [**getManufactureLineItemById**](docs/Api/ManufactureOrderLineItemsApi.md#getmanufacturelineitembyid) | **GET** /manufactureorderitems/{id} | Get manufacture line item by id
*ManufactureOrderLineItemsApi* | [**updateManufactureLineItem**](docs/Api/ManufactureOrderLineItemsApi.md#updatemanufacturelineitem) | **PUT** /manufactureorderitems/{id} | Updated manufacture line item
*ManufactureOrdersApi* | [**getManufactureOrderById**](docs/Api/ManufactureOrdersApi.md#getmanufactureorderbyid) | **GET** /manufactureorders/{id} | Get manufacture order by id
*ManufactureOrdersApi* | [**getManufactureOrders**](docs/Api/ManufactureOrdersApi.md#getmanufactureorders) | **GET** /manufactureorders | Get account by manufacture order id
*ManufactureOrdersApi* | [**updateManufactureOrder**](docs/Api/ManufactureOrdersApi.md#updatemanufactureorder) | **PUT** /manufactureorders/{id} | Updated manufacture order
*MessagesApi* | [**createMessage**](docs/Api/MessagesApi.md#createmessage) | **POST** /messages | Create a new message
*MessagesApi* | [**deleteMessage**](docs/Api/MessagesApi.md#deletemessage) | **DELETE** /messages/{id} | Delete message
*MessagesApi* | [**getMessageById**](docs/Api/MessagesApi.md#getmessagebyid) | **GET** /messages/{id} | Get message by id
*MessagesApi* | [**getMessages**](docs/Api/MessagesApi.md#getmessages) | **GET** /messages | Get messages
*MessagesApi* | [**updateMessage**](docs/Api/MessagesApi.md#updatemessage) | **PUT** /messages/{id} | Updated message
*NotesApi* | [**createNote**](docs/Api/NotesApi.md#createnote) | **POST** /notes | Create a new note
*NotesApi* | [**deleteInventoryItem**](docs/Api/NotesApi.md#deleteinventoryitem) | **DELETE** /inventoryitems/{id} | Delete Inventory Items
*NotesApi* | [**deleteNotes**](docs/Api/NotesApi.md#deletenotes) | **DELETE** /notes/{id} | Delete notes
*NotesApi* | [**getCustomersById**](docs/Api/NotesApi.md#getcustomersbyid) | **GET** /customers/{id} | Get customers by id
*NotesApi* | [**getNotes**](docs/Api/NotesApi.md#getnotes) | **GET** /notes | Get notes
*NotesApi* | [**getNotesById**](docs/Api/NotesApi.md#getnotesbyid) | **GET** /notes/{id} | Get notes by id
*NotesApi* | [**updateNotes**](docs/Api/NotesApi.md#updatenotes) | **PUT** /notes/{id} | Updated notes
*ReturnLineItemsApi* | [**getReturnItemById**](docs/Api/ReturnLineItemsApi.md#getreturnitembyid) | **GET** /returnitems | Get returnItem by id
*ReturnLineItemsApi* | [**getReturnLineItemById**](docs/Api/ReturnLineItemsApi.md#getreturnlineitembyid) | **GET** /returnitems/{id} | Get return line item by id
*ReturnLineItemsApi* | [**updateReturnLineItem**](docs/Api/ReturnLineItemsApi.md#updatereturnlineitem) | **PUT** /returnitems/{id} | Updated return line item
*ReturnsApi* | [**createReturn**](docs/Api/ReturnsApi.md#createreturn) | **POST** /returns | Create a new return
*ReturnsApi* | [**deleteReturn**](docs/Api/ReturnsApi.md#deletereturn) | **DELETE** /returns/{id} | Delete return
*ReturnsApi* | [**getReturnById**](docs/Api/ReturnsApi.md#getreturnbyid) | **GET** /returns/{id} | Get return by id
*ReturnsApi* | [**getReturns**](docs/Api/ReturnsApi.md#getreturns) | **GET** /returns | Get returns
*ReturnsApi* | [**updateReturn**](docs/Api/ReturnsApi.md#updatereturn) | **PUT** /returns/{id} | Updated return
*WarrantiesApi* | [**createWarranty**](docs/Api/WarrantiesApi.md#createwarranty) | **POST** /warranties | Create a new warranty
*WarrantiesApi* | [**getWarranties**](docs/Api/WarrantiesApi.md#getwarranties) | **GET** /warranties | Get warranties
*WarrantyApi* | [**deleteWarranty**](docs/Api/WarrantyApi.md#deletewarranty) | **DELETE** /warranties/{id} | Delete warranty
*WarrantyApi* | [**getWarrantyById**](docs/Api/WarrantyApi.md#getwarrantybyid) | **GET** /warranties/{id} | Get warranty by id
*WarrantyApi* | [**updateWarranty**](docs/Api/WarrantyApi.md#updatewarranty) | **PUT** /warranties/{id} | Updated warranty
*WarrantyLineItemsApi* | [**getWarrantyItemById**](docs/Api/WarrantyLineItemsApi.md#getwarrantyitembyid) | **GET** /warrantyitems | Get warrantyItem by id
*WarrantyLineItemsApi* | [**getWarrantyLineItemById**](docs/Api/WarrantyLineItemsApi.md#getwarrantylineitembyid) | **GET** /warrantyitems/{id} | Get warranty line item by id
*WarrantyLineItemsApi* | [**updateWarrantyLineItem**](docs/Api/WarrantyLineItemsApi.md#updatewarrantylineitem) | **PUT** /warrantyitems/{id} | Updated warranty line item
*WorkOrderLineItemsApi* | [**getWorkItemById**](docs/Api/WorkOrderLineItemsApi.md#getworkitembyid) | **GET** /workorderitems | Get work order item by id
*WorkOrderLineItemsApi* | [**getWorkLineItemById**](docs/Api/WorkOrderLineItemsApi.md#getworklineitembyid) | **GET** /workorderitems/{id} | Get work line item by id
*WorkOrderLineItemsApi* | [**updateWorkLineItem**](docs/Api/WorkOrderLineItemsApi.md#updateworklineitem) | **PUT** /workorderitems/{id} | Updated work line item
*WorkOrdersApi* | [**getWorkOrderById**](docs/Api/WorkOrdersApi.md#getworkorderbyid) | **GET** /workorders/{id} | Get work order by id
*WorkOrdersApi* | [**getWorkOrdes**](docs/Api/WorkOrdersApi.md#getworkordes) | **GET** /workorders | Get account by work order id
*WorkOrdersApi* | [**updateWorkOrder**](docs/Api/WorkOrdersApi.md#updateworkorder) | **PUT** /workorders/{id} | Updated work order

## Models

- [Accounts](docs/Model/Accounts.md)
- [BillOfMaterials](docs/Model/BillOfMaterials.md)
- [BillOfMaterialsLineItem](docs/Model/BillOfMaterialsLineItem.md)
- [Customers](docs/Model/Customers.md)
- [InventoryItems](docs/Model/InventoryItems.md)
- [ManufactureOrder](docs/Model/ManufactureOrder.md)
- [ManufactureOrderLineItem](docs/Model/ManufactureOrderLineItem.md)
- [Messages](docs/Model/Messages.md)
- [ModelReturn](docs/Model/ModelReturn.md)
- [Notes](docs/Model/Notes.md)
- [Problem](docs/Model/Problem.md)
- [ReturnItem](docs/Model/ReturnItem.md)
- [Warranty](docs/Model/Warranty.md)
- [WarrantyItem](docs/Model/WarrantyItem.md)
- [WorkOrder](docs/Model/WorkOrder.md)
- [WorkOrderLineItems](docs/Model/WorkOrderLineItems.md)

## Authorization

Authentication schemes defined for the API:
### main_auth

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: `https://api.stateset.com/v1/oauth/dialog`
- **Scopes**: 
    - **read:users**: read users info
    - **write:users**: modify or remove users

### api_key

- **Type**: API key
- **API key parameter name**: api_key
- **Location**: HTTP header


### basic_auth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

developers@stateset.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
