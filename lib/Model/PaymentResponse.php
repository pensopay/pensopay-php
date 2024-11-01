<?php
/**
 * PaymentResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Pensopay\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payment API
 *
 * Create and manage your Payments
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: support@pensopay.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.8.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Pensopay\Client\Model;

use \ArrayAccess;
use \Pensopay\Client\ObjectSerializer;

/**
 * PaymentResponse Class Doc Comment
 *
 * @category Class
 * @package  Pensopay\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order_id' => 'string',
        'mandate_id' => 'int',
        'amount' => 'int',
        'currency' => 'string',
        'testmode' => 'bool',
        'autocapture' => 'bool',
        'order' => 'object',
        'variables' => 'array<string,string>',
        'id' => 'int',
        'link' => 'string',
        'facilitator' => 'string',
        'state' => 'string',
        'refunded' => 'int',
        'captured' => 'int',
        'created_at' => 'string',
        'updated_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'order_id' => null,
        'mandate_id' => null,
        'amount' => null,
        'currency' => null,
        'testmode' => null,
        'autocapture' => null,
        'order' => null,
        'variables' => null,
        'id' => null,
        'link' => null,
        'facilitator' => null,
        'state' => null,
        'refunded' => null,
        'captured' => null,
        'created_at' => null,
        'updated_at' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'order_id' => false,
        'mandate_id' => false,
        'amount' => false,
        'currency' => false,
        'testmode' => false,
        'autocapture' => false,
        'order' => false,
        'variables' => false,
        'id' => false,
        'link' => false,
        'facilitator' => false,
        'state' => false,
        'refunded' => false,
        'captured' => false,
        'created_at' => false,
        'updated_at' => false
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
        'order_id' => 'order_id',
        'mandate_id' => 'mandate_id',
        'amount' => 'amount',
        'currency' => 'currency',
        'testmode' => 'testmode',
        'autocapture' => 'autocapture',
        'order' => 'order',
        'variables' => 'variables',
        'id' => 'id',
        'link' => 'link',
        'facilitator' => 'facilitator',
        'state' => 'state',
        'refunded' => 'refunded',
        'captured' => 'captured',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_id' => 'setOrderId',
        'mandate_id' => 'setMandateId',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'testmode' => 'setTestmode',
        'autocapture' => 'setAutocapture',
        'order' => 'setOrder',
        'variables' => 'setVariables',
        'id' => 'setId',
        'link' => 'setLink',
        'facilitator' => 'setFacilitator',
        'state' => 'setState',
        'refunded' => 'setRefunded',
        'captured' => 'setCaptured',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_id' => 'getOrderId',
        'mandate_id' => 'getMandateId',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'testmode' => 'getTestmode',
        'autocapture' => 'getAutocapture',
        'order' => 'getOrder',
        'variables' => 'getVariables',
        'id' => 'getId',
        'link' => 'getLink',
        'facilitator' => 'getFacilitator',
        'state' => 'getState',
        'refunded' => 'getRefunded',
        'captured' => 'getCaptured',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('mandate_id', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('testmode', $data ?? [], null);
        $this->setIfExists('autocapture', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('variables', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('link', $data ?? [], null);
        $this->setIfExists('facilitator', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('refunded', $data ?? [], null);
        $this->setIfExists('captured', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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

        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['link'] === null) {
            $invalidProperties[] = "'link' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
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
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id order_id
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
     * Gets mandate_id
     *
     * @return int|null
     */
    public function getMandateId()
    {
        return $this->container['mandate_id'];
    }

    /**
     * Sets mandate_id
     *
     * @param int|null $mandate_id mandate_id
     *
     * @return self
     */
    public function setMandateId($mandate_id)
    {
        if (is_null($mandate_id)) {
            throw new \InvalidArgumentException('non-nullable mandate_id cannot be null');
        }
        $this->container['mandate_id'] = $mandate_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets testmode
     *
     * @return bool|null
     */
    public function getTestmode()
    {
        return $this->container['testmode'];
    }

    /**
     * Sets testmode
     *
     * @param bool|null $testmode testmode
     *
     * @return self
     */
    public function setTestmode($testmode)
    {
        if (is_null($testmode)) {
            throw new \InvalidArgumentException('non-nullable testmode cannot be null');
        }
        $this->container['testmode'] = $testmode;

        return $this;
    }

    /**
     * Gets autocapture
     *
     * @return bool|null
     */
    public function getAutocapture()
    {
        return $this->container['autocapture'];
    }

    /**
     * Sets autocapture
     *
     * @param bool|null $autocapture autocapture
     *
     * @return self
     */
    public function setAutocapture($autocapture)
    {
        if (is_null($autocapture)) {
            throw new \InvalidArgumentException('non-nullable autocapture cannot be null');
        }
        $this->container['autocapture'] = $autocapture;

        return $this;
    }

    /**
     * Gets order
     *
     * @return object|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param object|null $order Order information
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets variables
     *
     * @return array<string,string>|null
     */
    public function getVariables()
    {
        return $this->container['variables'];
    }

    /**
     * Sets variables
     *
     * @param array<string,string>|null $variables variables
     *
     * @return self
     */
    public function setVariables($variables)
    {
        if (is_null($variables)) {
            throw new \InvalidArgumentException('non-nullable variables cannot be null');
        }
        $this->container['variables'] = $variables;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
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
     * Gets link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string $link link
     *
     * @return self
     */
    public function setLink($link)
    {
        if (is_null($link)) {
            throw new \InvalidArgumentException('non-nullable link cannot be null');
        }
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets facilitator
     *
     * @return string|null
     */
    public function getFacilitator()
    {
        return $this->container['facilitator'];
    }

    /**
     * Sets facilitator
     *
     * @param string|null $facilitator facilitator
     *
     * @return self
     */
    public function setFacilitator($facilitator)
    {
        if (is_null($facilitator)) {
            throw new \InvalidArgumentException('non-nullable facilitator cannot be null');
        }
        $this->container['facilitator'] = $facilitator;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets refunded
     *
     * @return int|null
     */
    public function getRefunded()
    {
        return $this->container['refunded'];
    }

    /**
     * Sets refunded
     *
     * @param int|null $refunded refunded
     *
     * @return self
     */
    public function setRefunded($refunded)
    {
        if (is_null($refunded)) {
            throw new \InvalidArgumentException('non-nullable refunded cannot be null');
        }
        $this->container['refunded'] = $refunded;

        return $this;
    }

    /**
     * Gets captured
     *
     * @return int|null
     */
    public function getCaptured()
    {
        return $this->container['captured'];
    }

    /**
     * Sets captured
     *
     * @param int|null $captured captured
     *
     * @return self
     */
    public function setCaptured($captured)
    {
        if (is_null($captured)) {
            throw new \InvalidArgumentException('non-nullable captured cannot be null');
        }
        $this->container['captured'] = $captured;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at created_at
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
     * Gets updated_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

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


