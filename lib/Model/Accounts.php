<?php
/**
 * Accounts
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
 * Accounts Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Accounts implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Accounts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'account_name' => 'string',
        'account_type' => 'string',
        'industry' => 'string',
        'rating' => 'string',
        'phone' => 'string',
        'created_at' => '\DateTime',
        'is_public' => 'bool',
        'controller' => 'string',
        'processor' => 'string',
        'is_active' => 'bool',
        'user_id' => 'string',
        'order_id' => 'string',
        'account_notes' => 'string',
        'annual_revenue' => 'int',
        'billing_city' => 'string',
        'billing_country' => 'string',
        'billing_latitude' => 'string',
        'billing_longitude' => 'string',
        'billing_state' => 'string',
        'billing_street' => 'string',
        'number_of_employees' => 'float',
        'ownership' => 'string',
        'shipping_city' => 'string',
        'shipping_country' => 'string',
        'shipping_latitude' => 'string',
        'shipping_longitude' => 'string',
        'shipping_state' => 'string',
        'shipping_street' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'account_name' => null,
        'account_type' => null,
        'industry' => null,
        'rating' => null,
        'phone' => null,
        'created_at' => 'date-time',
        'is_public' => null,
        'controller' => null,
        'processor' => null,
        'is_active' => null,
        'user_id' => null,
        'order_id' => null,
        'account_notes' => null,
        'annual_revenue' => null,
        'billing_city' => null,
        'billing_country' => null,
        'billing_latitude' => null,
        'billing_longitude' => null,
        'billing_state' => null,
        'billing_street' => null,
        'number_of_employees' => null,
        'ownership' => null,
        'shipping_city' => null,
        'shipping_country' => null,
        'shipping_latitude' => null,
        'shipping_longitude' => null,
        'shipping_state' => null,
        'shipping_street' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'account_name' => false,
		'account_type' => false,
		'industry' => false,
		'rating' => false,
		'phone' => false,
		'created_at' => false,
		'is_public' => false,
		'controller' => false,
		'processor' => false,
		'is_active' => false,
		'user_id' => false,
		'order_id' => false,
		'account_notes' => false,
		'annual_revenue' => false,
		'billing_city' => false,
		'billing_country' => false,
		'billing_latitude' => false,
		'billing_longitude' => false,
		'billing_state' => false,
		'billing_street' => false,
		'number_of_employees' => false,
		'ownership' => false,
		'shipping_city' => false,
		'shipping_country' => false,
		'shipping_latitude' => false,
		'shipping_longitude' => false,
		'shipping_state' => false,
		'shipping_street' => false
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
        'account_name' => 'accountName',
        'account_type' => 'accountType',
        'industry' => 'industry',
        'rating' => 'rating',
        'phone' => 'phone',
        'created_at' => 'created_at',
        'is_public' => 'is_public',
        'controller' => 'controller',
        'processor' => 'processor',
        'is_active' => 'is_active',
        'user_id' => 'user_id',
        'order_id' => 'order_id',
        'account_notes' => 'accountNotes',
        'annual_revenue' => 'annualRevenue',
        'billing_city' => 'billingCity',
        'billing_country' => 'billingCountry',
        'billing_latitude' => 'billingLatitude',
        'billing_longitude' => 'billingLongitude',
        'billing_state' => 'billingState',
        'billing_street' => 'billingStreet',
        'number_of_employees' => 'numberOfEmployees',
        'ownership' => 'ownership',
        'shipping_city' => 'shippingCity',
        'shipping_country' => 'shippingCountry',
        'shipping_latitude' => 'shippingLatitude',
        'shipping_longitude' => 'shippingLongitude',
        'shipping_state' => 'shippingState',
        'shipping_street' => 'shippingStreet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'account_name' => 'setAccountName',
        'account_type' => 'setAccountType',
        'industry' => 'setIndustry',
        'rating' => 'setRating',
        'phone' => 'setPhone',
        'created_at' => 'setCreatedAt',
        'is_public' => 'setIsPublic',
        'controller' => 'setController',
        'processor' => 'setProcessor',
        'is_active' => 'setIsActive',
        'user_id' => 'setUserId',
        'order_id' => 'setOrderId',
        'account_notes' => 'setAccountNotes',
        'annual_revenue' => 'setAnnualRevenue',
        'billing_city' => 'setBillingCity',
        'billing_country' => 'setBillingCountry',
        'billing_latitude' => 'setBillingLatitude',
        'billing_longitude' => 'setBillingLongitude',
        'billing_state' => 'setBillingState',
        'billing_street' => 'setBillingStreet',
        'number_of_employees' => 'setNumberOfEmployees',
        'ownership' => 'setOwnership',
        'shipping_city' => 'setShippingCity',
        'shipping_country' => 'setShippingCountry',
        'shipping_latitude' => 'setShippingLatitude',
        'shipping_longitude' => 'setShippingLongitude',
        'shipping_state' => 'setShippingState',
        'shipping_street' => 'setShippingStreet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'account_name' => 'getAccountName',
        'account_type' => 'getAccountType',
        'industry' => 'getIndustry',
        'rating' => 'getRating',
        'phone' => 'getPhone',
        'created_at' => 'getCreatedAt',
        'is_public' => 'getIsPublic',
        'controller' => 'getController',
        'processor' => 'getProcessor',
        'is_active' => 'getIsActive',
        'user_id' => 'getUserId',
        'order_id' => 'getOrderId',
        'account_notes' => 'getAccountNotes',
        'annual_revenue' => 'getAnnualRevenue',
        'billing_city' => 'getBillingCity',
        'billing_country' => 'getBillingCountry',
        'billing_latitude' => 'getBillingLatitude',
        'billing_longitude' => 'getBillingLongitude',
        'billing_state' => 'getBillingState',
        'billing_street' => 'getBillingStreet',
        'number_of_employees' => 'getNumberOfEmployees',
        'ownership' => 'getOwnership',
        'shipping_city' => 'getShippingCity',
        'shipping_country' => 'getShippingCountry',
        'shipping_latitude' => 'getShippingLatitude',
        'shipping_longitude' => 'getShippingLongitude',
        'shipping_state' => 'getShippingState',
        'shipping_street' => 'getShippingStreet'
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
        $this->setIfExists('account_name', $data ?? [], null);
        $this->setIfExists('account_type', $data ?? [], null);
        $this->setIfExists('industry', $data ?? [], null);
        $this->setIfExists('rating', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('is_public', $data ?? [], null);
        $this->setIfExists('controller', $data ?? [], null);
        $this->setIfExists('processor', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('account_notes', $data ?? [], null);
        $this->setIfExists('annual_revenue', $data ?? [], null);
        $this->setIfExists('billing_city', $data ?? [], null);
        $this->setIfExists('billing_country', $data ?? [], null);
        $this->setIfExists('billing_latitude', $data ?? [], null);
        $this->setIfExists('billing_longitude', $data ?? [], null);
        $this->setIfExists('billing_state', $data ?? [], null);
        $this->setIfExists('billing_street', $data ?? [], null);
        $this->setIfExists('number_of_employees', $data ?? [], null);
        $this->setIfExists('ownership', $data ?? [], null);
        $this->setIfExists('shipping_city', $data ?? [], null);
        $this->setIfExists('shipping_country', $data ?? [], null);
        $this->setIfExists('shipping_latitude', $data ?? [], null);
        $this->setIfExists('shipping_longitude', $data ?? [], null);
        $this->setIfExists('shipping_state', $data ?? [], null);
        $this->setIfExists('shipping_street', $data ?? [], null);
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
     * @param string|null $id The unique identifier for the account.
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
     * Gets account_name
     *
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string|null $account_name The name of the account.
     *
     * @return self
     */
    public function setAccountName($account_name)
    {
        if (is_null($account_name)) {
            throw new \InvalidArgumentException('non-nullable account_name cannot be null');
        }
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return string|null
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string|null $account_type The type of account.
     *
     * @return self
     */
    public function setAccountType($account_type)
    {
        if (is_null($account_type)) {
            throw new \InvalidArgumentException('non-nullable account_type cannot be null');
        }
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets industry
     *
     * @return string|null
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     *
     * @param string|null $industry The industry the account belongs to.
     *
     * @return self
     */
    public function setIndustry($industry)
    {
        if (is_null($industry)) {
            throw new \InvalidArgumentException('non-nullable industry cannot be null');
        }
        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets rating
     *
     * @return string|null
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     *
     * @param string|null $rating The rating of the account.
     *
     * @return self
     */
    public function setRating($rating)
    {
        if (is_null($rating)) {
            throw new \InvalidArgumentException('non-nullable rating cannot be null');
        }
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone The phone number of the account.
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at The date and time when the account was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets is_public
     *
     * @return bool|null
     */
    public function getIsPublic()
    {
        return $this->container['is_public'];
    }

    /**
     * Sets is_public
     *
     * @param bool|null $is_public Whether the account is public or private.
     *
     * @return self
     */
    public function setIsPublic($is_public)
    {
        if (is_null($is_public)) {
            throw new \InvalidArgumentException('non-nullable is_public cannot be null');
        }
        $this->container['is_public'] = $is_public;

        return $this;
    }

    /**
     * Gets controller
     *
     * @return string|null
     */
    public function getController()
    {
        return $this->container['controller'];
    }

    /**
     * Sets controller
     *
     * @param string|null $controller The controller of the account.
     *
     * @return self
     */
    public function setController($controller)
    {
        if (is_null($controller)) {
            throw new \InvalidArgumentException('non-nullable controller cannot be null');
        }
        $this->container['controller'] = $controller;

        return $this;
    }

    /**
     * Gets processor
     *
     * @return string|null
     */
    public function getProcessor()
    {
        return $this->container['processor'];
    }

    /**
     * Sets processor
     *
     * @param string|null $processor The processor of the account.
     *
     * @return self
     */
    public function setProcessor($processor)
    {
        if (is_null($processor)) {
            throw new \InvalidArgumentException('non-nullable processor cannot be null');
        }
        $this->container['processor'] = $processor;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active Whether the account is active or not.
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        if (is_null($is_active)) {
            throw new \InvalidArgumentException('non-nullable is_active cannot be null');
        }
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id The ID of the user who created the account.
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        if (is_null($user_id)) {
            throw new \InvalidArgumentException('non-nullable user_id cannot be null');
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id The ID of the order associated with the account.
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        if (is_null($order_id)) {
            throw new \InvalidArgumentException('non-nullable order_id cannot be null');
        }
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets account_notes
     *
     * @return string|null
     */
    public function getAccountNotes()
    {
        return $this->container['account_notes'];
    }

    /**
     * Sets account_notes
     *
     * @param string|null $account_notes Any notes or comments associated with the account.
     *
     * @return self
     */
    public function setAccountNotes($account_notes)
    {
        if (is_null($account_notes)) {
            throw new \InvalidArgumentException('non-nullable account_notes cannot be null');
        }
        $this->container['account_notes'] = $account_notes;

        return $this;
    }

    /**
     * Gets annual_revenue
     *
     * @return int|null
     */
    public function getAnnualRevenue()
    {
        return $this->container['annual_revenue'];
    }

    /**
     * Sets annual_revenue
     *
     * @param int|null $annual_revenue The annual revenue of the account.
     *
     * @return self
     */
    public function setAnnualRevenue($annual_revenue)
    {
        if (is_null($annual_revenue)) {
            throw new \InvalidArgumentException('non-nullable annual_revenue cannot be null');
        }
        $this->container['annual_revenue'] = $annual_revenue;

        return $this;
    }

    /**
     * Gets billing_city
     *
     * @return string|null
     */
    public function getBillingCity()
    {
        return $this->container['billing_city'];
    }

    /**
     * Sets billing_city
     *
     * @param string|null $billing_city The city for the account's billing address.
     *
     * @return self
     */
    public function setBillingCity($billing_city)
    {
        if (is_null($billing_city)) {
            throw new \InvalidArgumentException('non-nullable billing_city cannot be null');
        }
        $this->container['billing_city'] = $billing_city;

        return $this;
    }

    /**
     * Gets billing_country
     *
     * @return string|null
     */
    public function getBillingCountry()
    {
        return $this->container['billing_country'];
    }

    /**
     * Sets billing_country
     *
     * @param string|null $billing_country The country for the account's billing address.
     *
     * @return self
     */
    public function setBillingCountry($billing_country)
    {
        if (is_null($billing_country)) {
            throw new \InvalidArgumentException('non-nullable billing_country cannot be null');
        }
        $this->container['billing_country'] = $billing_country;

        return $this;
    }

    /**
     * Gets billing_latitude
     *
     * @return string|null
     */
    public function getBillingLatitude()
    {
        return $this->container['billing_latitude'];
    }

    /**
     * Sets billing_latitude
     *
     * @param string|null $billing_latitude The latitude for the account's billing address.
     *
     * @return self
     */
    public function setBillingLatitude($billing_latitude)
    {
        if (is_null($billing_latitude)) {
            throw new \InvalidArgumentException('non-nullable billing_latitude cannot be null');
        }
        $this->container['billing_latitude'] = $billing_latitude;

        return $this;
    }

    /**
     * Gets billing_longitude
     *
     * @return string|null
     */
    public function getBillingLongitude()
    {
        return $this->container['billing_longitude'];
    }

    /**
     * Sets billing_longitude
     *
     * @param string|null $billing_longitude The longitude for the account's billing address.
     *
     * @return self
     */
    public function setBillingLongitude($billing_longitude)
    {
        if (is_null($billing_longitude)) {
            throw new \InvalidArgumentException('non-nullable billing_longitude cannot be null');
        }
        $this->container['billing_longitude'] = $billing_longitude;

        return $this;
    }

    /**
     * Gets billing_state
     *
     * @return string|null
     */
    public function getBillingState()
    {
        return $this->container['billing_state'];
    }

    /**
     * Sets billing_state
     *
     * @param string|null $billing_state The state or province for the account's billing address.
     *
     * @return self
     */
    public function setBillingState($billing_state)
    {
        if (is_null($billing_state)) {
            throw new \InvalidArgumentException('non-nullable billing_state cannot be null');
        }
        $this->container['billing_state'] = $billing_state;

        return $this;
    }

    /**
     * Gets billing_street
     *
     * @return string|null
     */
    public function getBillingStreet()
    {
        return $this->container['billing_street'];
    }

    /**
     * Sets billing_street
     *
     * @param string|null $billing_street The street address for the account's billing address.
     *
     * @return self
     */
    public function setBillingStreet($billing_street)
    {
        if (is_null($billing_street)) {
            throw new \InvalidArgumentException('non-nullable billing_street cannot be null');
        }
        $this->container['billing_street'] = $billing_street;

        return $this;
    }

    /**
     * Gets number_of_employees
     *
     * @return float|null
     */
    public function getNumberOfEmployees()
    {
        return $this->container['number_of_employees'];
    }

    /**
     * Sets number_of_employees
     *
     * @param float|null $number_of_employees The number of employees for the account.
     *
     * @return self
     */
    public function setNumberOfEmployees($number_of_employees)
    {
        if (is_null($number_of_employees)) {
            throw new \InvalidArgumentException('non-nullable number_of_employees cannot be null');
        }
        $this->container['number_of_employees'] = $number_of_employees;

        return $this;
    }

    /**
     * Gets ownership
     *
     * @return string|null
     */
    public function getOwnership()
    {
        return $this->container['ownership'];
    }

    /**
     * Sets ownership
     *
     * @param string|null $ownership The ownership status of the account.
     *
     * @return self
     */
    public function setOwnership($ownership)
    {
        if (is_null($ownership)) {
            throw new \InvalidArgumentException('non-nullable ownership cannot be null');
        }
        $this->container['ownership'] = $ownership;

        return $this;
    }

    /**
     * Gets shipping_city
     *
     * @return string|null
     */
    public function getShippingCity()
    {
        return $this->container['shipping_city'];
    }

    /**
     * Sets shipping_city
     *
     * @param string|null $shipping_city The city for the account's shipping address.
     *
     * @return self
     */
    public function setShippingCity($shipping_city)
    {
        if (is_null($shipping_city)) {
            throw new \InvalidArgumentException('non-nullable shipping_city cannot be null');
        }
        $this->container['shipping_city'] = $shipping_city;

        return $this;
    }

    /**
     * Gets shipping_country
     *
     * @return string|null
     */
    public function getShippingCountry()
    {
        return $this->container['shipping_country'];
    }

    /**
     * Sets shipping_country
     *
     * @param string|null $shipping_country The country for the account's shipping address.
     *
     * @return self
     */
    public function setShippingCountry($shipping_country)
    {
        if (is_null($shipping_country)) {
            throw new \InvalidArgumentException('non-nullable shipping_country cannot be null');
        }
        $this->container['shipping_country'] = $shipping_country;

        return $this;
    }

    /**
     * Gets shipping_latitude
     *
     * @return string|null
     */
    public function getShippingLatitude()
    {
        return $this->container['shipping_latitude'];
    }

    /**
     * Sets shipping_latitude
     *
     * @param string|null $shipping_latitude The latitude for the account's shipping address.
     *
     * @return self
     */
    public function setShippingLatitude($shipping_latitude)
    {
        if (is_null($shipping_latitude)) {
            throw new \InvalidArgumentException('non-nullable shipping_latitude cannot be null');
        }
        $this->container['shipping_latitude'] = $shipping_latitude;

        return $this;
    }

    /**
     * Gets shipping_longitude
     *
     * @return string|null
     */
    public function getShippingLongitude()
    {
        return $this->container['shipping_longitude'];
    }

    /**
     * Sets shipping_longitude
     *
     * @param string|null $shipping_longitude The longitude for the account's shipping address.
     *
     * @return self
     */
    public function setShippingLongitude($shipping_longitude)
    {
        if (is_null($shipping_longitude)) {
            throw new \InvalidArgumentException('non-nullable shipping_longitude cannot be null');
        }
        $this->container['shipping_longitude'] = $shipping_longitude;

        return $this;
    }

    /**
     * Gets shipping_state
     *
     * @return string|null
     */
    public function getShippingState()
    {
        return $this->container['shipping_state'];
    }

    /**
     * Sets shipping_state
     *
     * @param string|null $shipping_state The state or province for the account's shipping address.
     *
     * @return self
     */
    public function setShippingState($shipping_state)
    {
        if (is_null($shipping_state)) {
            throw new \InvalidArgumentException('non-nullable shipping_state cannot be null');
        }
        $this->container['shipping_state'] = $shipping_state;

        return $this;
    }

    /**
     * Gets shipping_street
     *
     * @return string|null
     */
    public function getShippingStreet()
    {
        return $this->container['shipping_street'];
    }

    /**
     * Sets shipping_street
     *
     * @param string|null $shipping_street shipping_street
     *
     * @return self
     */
    public function setShippingStreet($shipping_street)
    {
        if (is_null($shipping_street)) {
            throw new \InvalidArgumentException('non-nullable shipping_street cannot be null');
        }
        $this->container['shipping_street'] = $shipping_street;

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

