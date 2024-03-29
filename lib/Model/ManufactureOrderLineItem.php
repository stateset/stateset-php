<?php
/**
 * ManufactureOrderLineItem
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Stateset
 *
 * This is the Stateset One API based on The OpenAPI Specification. # Introduction This API definition is intended to to be a good starting point for describing your API in [OpenAPI/Swagger format](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.2.md). # OpenAPI Specification The goal of The OpenAPI Specification is to define a standard, language-agnostic interface to REST APIs which allows both humans and computers to discover and understand the capabilities of the service without access to source code, documentation, or through network traffic inspection. When properly defined via OpenAPI, a consumer can  understand and interact with the remote service with a minimal amount of implementation logic. Similar to what interfaces have done for lower-level programming, OpenAPI removes the guesswork in calling the service.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: developers@stateset.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ManufactureOrderLineItem Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ManufactureOrderLineItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ManufactureOrderLineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'line_type' => 'string',
        'output_type' => 'string',
        'line_status' => 'string',
        'part_number' => 'string',
        'part_name' => 'string',
        'expected_date' => '\DateTime',
        'quantity' => 'int',
        'work_order_number' => 'int',
        'site' => 'string',
        'yield_location' => 'string',
        'bom_number' => 'int',
        'bom_name' => 'string',
        'priority' => 'string',
        'manufacture_order_number' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'line_type' => null,
        'output_type' => null,
        'line_status' => null,
        'part_number' => null,
        'part_name' => null,
        'expected_date' => 'date',
        'quantity' => null,
        'work_order_number' => null,
        'site' => null,
        'yield_location' => null,
        'bom_number' => null,
        'bom_name' => null,
        'priority' => null,
        'manufacture_order_number' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'line_type' => false,
		'output_type' => false,
		'line_status' => false,
		'part_number' => false,
		'part_name' => false,
		'expected_date' => false,
		'quantity' => false,
		'work_order_number' => false,
		'site' => false,
		'yield_location' => false,
		'bom_number' => false,
		'bom_name' => false,
		'priority' => false,
		'manufacture_order_number' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'line_type' => 'line_type',
        'output_type' => 'output_type',
        'line_status' => 'line_status',
        'part_number' => 'part_number',
        'part_name' => 'part_name',
        'expected_date' => 'expected_date',
        'quantity' => 'quantity',
        'work_order_number' => 'work_order_number',
        'site' => 'site',
        'yield_location' => 'yield_location',
        'bom_number' => 'bom_number',
        'bom_name' => 'bom_name',
        'priority' => 'priority',
        'manufacture_order_number' => 'manufacture_order_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'line_type' => 'setLineType',
        'output_type' => 'setOutputType',
        'line_status' => 'setLineStatus',
        'part_number' => 'setPartNumber',
        'part_name' => 'setPartName',
        'expected_date' => 'setExpectedDate',
        'quantity' => 'setQuantity',
        'work_order_number' => 'setWorkOrderNumber',
        'site' => 'setSite',
        'yield_location' => 'setYieldLocation',
        'bom_number' => 'setBomNumber',
        'bom_name' => 'setBomName',
        'priority' => 'setPriority',
        'manufacture_order_number' => 'setManufactureOrderNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'line_type' => 'getLineType',
        'output_type' => 'getOutputType',
        'line_status' => 'getLineStatus',
        'part_number' => 'getPartNumber',
        'part_name' => 'getPartName',
        'expected_date' => 'getExpectedDate',
        'quantity' => 'getQuantity',
        'work_order_number' => 'getWorkOrderNumber',
        'site' => 'getSite',
        'yield_location' => 'getYieldLocation',
        'bom_number' => 'getBomNumber',
        'bom_name' => 'getBomName',
        'priority' => 'getPriority',
        'manufacture_order_number' => 'getManufactureOrderNumber'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('line_type', $data ?? [], null);
        $this->setIfExists('output_type', $data ?? [], null);
        $this->setIfExists('line_status', $data ?? [], null);
        $this->setIfExists('part_number', $data ?? [], null);
        $this->setIfExists('part_name', $data ?? [], null);
        $this->setIfExists('expected_date', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('work_order_number', $data ?? [], null);
        $this->setIfExists('site', $data ?? [], null);
        $this->setIfExists('yield_location', $data ?? [], null);
        $this->setIfExists('bom_number', $data ?? [], null);
        $this->setIfExists('bom_name', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
        $this->setIfExists('manufacture_order_number', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Unique identifier for the Manufacture Order Line Item.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets line_type
     *
     * @return string|null
     */
    public function getLineType()
    {
        return $this->container['line_type'];
    }

    /**
     * Sets line_type
     *
     * @param string|null $line_type The type of the manufacture order line item.
     *
     * @return self
     */
    public function setLineType($line_type)
    {
        if (is_null($line_type)) {
            throw new \InvalidArgumentException('non-nullable line_type cannot be null');
        }
        $this->container['line_type'] = $line_type;

        return $this;
    }

    /**
     * Gets output_type
     *
     * @return string|null
     */
    public function getOutputType()
    {
        return $this->container['output_type'];
    }

    /**
     * Sets output_type
     *
     * @param string|null $output_type The type of output of the manufacture order line item.
     *
     * @return self
     */
    public function setOutputType($output_type)
    {
        if (is_null($output_type)) {
            throw new \InvalidArgumentException('non-nullable output_type cannot be null');
        }
        $this->container['output_type'] = $output_type;

        return $this;
    }

    /**
     * Gets line_status
     *
     * @return string|null
     */
    public function getLineStatus()
    {
        return $this->container['line_status'];
    }

    /**
     * Sets line_status
     *
     * @param string|null $line_status The status of the manufacture order line item.
     *
     * @return self
     */
    public function setLineStatus($line_status)
    {
        if (is_null($line_status)) {
            throw new \InvalidArgumentException('non-nullable line_status cannot be null');
        }
        $this->container['line_status'] = $line_status;

        return $this;
    }

    /**
     * Gets part_number
     *
     * @return string|null
     */
    public function getPartNumber()
    {
        return $this->container['part_number'];
    }

    /**
     * Sets part_number
     *
     * @param string|null $part_number The part number of the manufacture order line item.
     *
     * @return self
     */
    public function setPartNumber($part_number)
    {
        if (is_null($part_number)) {
            throw new \InvalidArgumentException('non-nullable part_number cannot be null');
        }
        $this->container['part_number'] = $part_number;

        return $this;
    }

    /**
     * Gets part_name
     *
     * @return string|null
     */
    public function getPartName()
    {
        return $this->container['part_name'];
    }

    /**
     * Sets part_name
     *
     * @param string|null $part_name The name of the part of the manufacture order line item.
     *
     * @return self
     */
    public function setPartName($part_name)
    {
        if (is_null($part_name)) {
            throw new \InvalidArgumentException('non-nullable part_name cannot be null');
        }
        $this->container['part_name'] = $part_name;

        return $this;
    }

    /**
     * Gets expected_date
     *
     * @return \DateTime|null
     */
    public function getExpectedDate()
    {
        return $this->container['expected_date'];
    }

    /**
     * Sets expected_date
     *
     * @param \DateTime|null $expected_date The expected completion date of the manufacture order line item.
     *
     * @return self
     */
    public function setExpectedDate($expected_date)
    {
        if (is_null($expected_date)) {
            throw new \InvalidArgumentException('non-nullable expected_date cannot be null');
        }
        $this->container['expected_date'] = $expected_date;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity The quantity of the manufacture order line item.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets work_order_number
     *
     * @return int|null
     */
    public function getWorkOrderNumber()
    {
        return $this->container['work_order_number'];
    }

    /**
     * Sets work_order_number
     *
     * @param int|null $work_order_number The work order number of the manufacture order line item.
     *
     * @return self
     */
    public function setWorkOrderNumber($work_order_number)
    {
        if (is_null($work_order_number)) {
            throw new \InvalidArgumentException('non-nullable work_order_number cannot be null');
        }
        $this->container['work_order_number'] = $work_order_number;

        return $this;
    }

    /**
     * Gets site
     *
     * @return string|null
     */
    public function getSite()
    {
        return $this->container['site'];
    }

    /**
     * Sets site
     *
     * @param string|null $site The site where the manufacture order line item is to be produced.
     *
     * @return self
     */
    public function setSite($site)
    {
        if (is_null($site)) {
            throw new \InvalidArgumentException('non-nullable site cannot be null');
        }
        $this->container['site'] = $site;

        return $this;
    }

    /**
     * Gets yield_location
     *
     * @return string|null
     */
    public function getYieldLocation()
    {
        return $this->container['yield_location'];
    }

    /**
     * Sets yield_location
     *
     * @param string|null $yield_location The location where the yield of the manufacture order line item is to be produced.
     *
     * @return self
     */
    public function setYieldLocation($yield_location)
    {
        if (is_null($yield_location)) {
            throw new \InvalidArgumentException('non-nullable yield_location cannot be null');
        }
        $this->container['yield_location'] = $yield_location;

        return $this;
    }

    /**
     * Gets bom_number
     *
     * @return int|null
     */
    public function getBomNumber()
    {
        return $this->container['bom_number'];
    }

    /**
     * Sets bom_number
     *
     * @param int|null $bom_number The Bill of Materials (BOM) number of the manufacture order line item.
     *
     * @return self
     */
    public function setBomNumber($bom_number)
    {
        if (is_null($bom_number)) {
            throw new \InvalidArgumentException('non-nullable bom_number cannot be null');
        }
        $this->container['bom_number'] = $bom_number;

        return $this;
    }

    /**
     * Gets bom_name
     *
     * @return string|null
     */
    public function getBomName()
    {
        return $this->container['bom_name'];
    }

    /**
     * Sets bom_name
     *
     * @param string|null $bom_name The Bill of Materials (BOM) name of the manufacture order line item.
     *
     * @return self
     */
    public function setBomName($bom_name)
    {
        if (is_null($bom_name)) {
            throw new \InvalidArgumentException('non-nullable bom_name cannot be null');
        }
        $this->container['bom_name'] = $bom_name;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return string|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string|null $priority The priority of the manufacture order line item.
     *
     * @return self
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets manufacture_order_number
     *
     * @return int|null
     */
    public function getManufactureOrderNumber()
    {
        return $this->container['manufacture_order_number'];
    }

    /**
     * Sets manufacture_order_number
     *
     * @param int|null $manufacture_order_number The number of the manufacture order for which the manufacture order line item belongs to.
     *
     * @return self
     */
    public function setManufactureOrderNumber($manufacture_order_number)
    {
        if (is_null($manufacture_order_number)) {
            throw new \InvalidArgumentException('non-nullable manufacture_order_number cannot be null');
        }
        $this->container['manufacture_order_number'] = $manufacture_order_number;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


