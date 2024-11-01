<?php
/**
 * TransactionResponse
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
 * TransactionResponse Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Pensopay\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TransactionResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'rrn' => 'string',
        'arn' => 'string',
        'type' => 'string',
        'processed_at' => 'string',
        'amount' => 'int',
        'currency' => 'string',
        'text_on_statement' => 'string',
        'reference' => 'string',
        'threed_secure' => 'string',
        'recurring' => 'bool',
        'region' => 'string',
        'payment_method' => 'string',
        'status' => 'object',
        'settlement' => '\Pensopay\Client\Model\TransactionResponseSettlement'
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
        'rrn' => null,
        'arn' => null,
        'type' => null,
        'processed_at' => null,
        'amount' => null,
        'currency' => null,
        'text_on_statement' => null,
        'reference' => null,
        'threed_secure' => null,
        'recurring' => null,
        'region' => null,
        'payment_method' => null,
        'status' => null,
        'settlement' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'rrn' => false,
        'arn' => false,
        'type' => false,
        'processed_at' => false,
        'amount' => false,
        'currency' => false,
        'text_on_statement' => false,
        'reference' => false,
        'threed_secure' => false,
        'recurring' => false,
        'region' => false,
        'payment_method' => false,
        'status' => false,
        'settlement' => false
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
        'rrn' => 'rrn',
        'arn' => 'arn',
        'type' => 'type',
        'processed_at' => 'processed_at',
        'amount' => 'amount',
        'currency' => 'currency',
        'text_on_statement' => 'text_on_statement',
        'reference' => 'reference',
        'threed_secure' => 'threed_secure',
        'recurring' => 'recurring',
        'region' => 'region',
        'payment_method' => 'payment_method',
        'status' => 'status',
        'settlement' => 'settlement'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'rrn' => 'setRrn',
        'arn' => 'setArn',
        'type' => 'setType',
        'processed_at' => 'setProcessedAt',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'text_on_statement' => 'setTextOnStatement',
        'reference' => 'setReference',
        'threed_secure' => 'setThreedSecure',
        'recurring' => 'setRecurring',
        'region' => 'setRegion',
        'payment_method' => 'setPaymentMethod',
        'status' => 'setStatus',
        'settlement' => 'setSettlement'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'rrn' => 'getRrn',
        'arn' => 'getArn',
        'type' => 'getType',
        'processed_at' => 'getProcessedAt',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'text_on_statement' => 'getTextOnStatement',
        'reference' => 'getReference',
        'threed_secure' => 'getThreedSecure',
        'recurring' => 'getRecurring',
        'region' => 'getRegion',
        'payment_method' => 'getPaymentMethod',
        'status' => 'getStatus',
        'settlement' => 'getSettlement'
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
        $this->setIfExists('rrn', $data ?? [], null);
        $this->setIfExists('arn', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('processed_at', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('text_on_statement', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('threed_secure', $data ?? [], null);
        $this->setIfExists('recurring', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
        $this->setIfExists('payment_method', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('settlement', $data ?? [], null);
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
     * @param string|null $id 
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
     * Gets rrn
     *
     * @return string|null
     */
    public function getRrn()
    {
        return $this->container['rrn'];
    }

    /**
     * Sets rrn
     *
     * @param string|null $rrn 
     *
     * @return self
     */
    public function setRrn($rrn)
    {
        if (is_null($rrn)) {
            throw new \InvalidArgumentException('non-nullable rrn cannot be null');
        }
        $this->container['rrn'] = $rrn;

        return $this;
    }

    /**
     * Gets arn
     *
     * @return string|null
     */
    public function getArn()
    {
        return $this->container['arn'];
    }

    /**
     * Sets arn
     *
     * @param string|null $arn 
     *
     * @return self
     */
    public function setArn($arn)
    {
        if (is_null($arn)) {
            throw new \InvalidArgumentException('non-nullable arn cannot be null');
        }
        $this->container['arn'] = $arn;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type 
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets processed_at
     *
     * @return string|null
     */
    public function getProcessedAt()
    {
        return $this->container['processed_at'];
    }

    /**
     * Sets processed_at
     *
     * @param string|null $processed_at 
     *
     * @return self
     */
    public function setProcessedAt($processed_at)
    {
        if (is_null($processed_at)) {
            throw new \InvalidArgumentException('non-nullable processed_at cannot be null');
        }
        $this->container['processed_at'] = $processed_at;

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
     * @param int|null $amount 
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
     * @param string|null $currency 
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
     * Gets text_on_statement
     *
     * @return string|null
     */
    public function getTextOnStatement()
    {
        return $this->container['text_on_statement'];
    }

    /**
     * Sets text_on_statement
     *
     * @param string|null $text_on_statement 
     *
     * @return self
     */
    public function setTextOnStatement($text_on_statement)
    {
        if (is_null($text_on_statement)) {
            throw new \InvalidArgumentException('non-nullable text_on_statement cannot be null');
        }
        $this->container['text_on_statement'] = $text_on_statement;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference 
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
        }
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets threed_secure
     *
     * @return string|null
     */
    public function getThreedSecure()
    {
        return $this->container['threed_secure'];
    }

    /**
     * Sets threed_secure
     *
     * @param string|null $threed_secure 
     *
     * @return self
     */
    public function setThreedSecure($threed_secure)
    {
        if (is_null($threed_secure)) {
            throw new \InvalidArgumentException('non-nullable threed_secure cannot be null');
        }
        $this->container['threed_secure'] = $threed_secure;

        return $this;
    }

    /**
     * Gets recurring
     *
     * @return bool|null
     */
    public function getRecurring()
    {
        return $this->container['recurring'];
    }

    /**
     * Sets recurring
     *
     * @param bool|null $recurring 
     *
     * @return self
     */
    public function setRecurring($recurring)
    {
        if (is_null($recurring)) {
            throw new \InvalidArgumentException('non-nullable recurring cannot be null');
        }
        $this->container['recurring'] = $recurring;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region 
     *
     * @return self
     */
    public function setRegion($region)
    {
        if (is_null($region)) {
            throw new \InvalidArgumentException('non-nullable region cannot be null');
        }
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string|null $payment_method 
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {
        if (is_null($payment_method)) {
            throw new \InvalidArgumentException('non-nullable payment_method cannot be null');
        }
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets status
     *
     * @return object|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param object|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets settlement
     *
     * @return \Pensopay\Client\Model\TransactionResponseSettlement|null
     */
    public function getSettlement()
    {
        return $this->container['settlement'];
    }

    /**
     * Sets settlement
     *
     * @param \Pensopay\Client\Model\TransactionResponseSettlement|null $settlement settlement
     *
     * @return self
     */
    public function setSettlement($settlement)
    {
        if (is_null($settlement)) {
            throw new \InvalidArgumentException('non-nullable settlement cannot be null');
        }
        $this->container['settlement'] = $settlement;

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


