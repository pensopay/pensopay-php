<?php
/**
 * Settlement
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
 * Settlement Class Doc Comment
 *
 * @category Class
 * @description Settlement Struct
 * @package  Pensopay\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Settlement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Settlement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'settled' => 'bool',
        'currency' => 'string',
        'period' => '\Pensopay\Client\Model\SettlementPeriod',
        'payout' => '\Pensopay\Client\Model\SettlementPayoutReserve',
        'summary' => '\Pensopay\Client\Model\SettlementSummary',
        'reserve' => '\Pensopay\Client\Model\SettlementPayoutReserve',
        'fees' => '\Pensopay\Client\Model\SettlementFees',
        'other_postings' => '\Pensopay\Client\Model\SettlementPosting[]'
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
        'settled' => null,
        'currency' => null,
        'period' => null,
        'payout' => null,
        'summary' => null,
        'reserve' => null,
        'fees' => null,
        'other_postings' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'settled' => false,
        'currency' => false,
        'period' => false,
        'payout' => false,
        'summary' => false,
        'reserve' => false,
        'fees' => false,
        'other_postings' => false
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
        'settled' => 'settled',
        'currency' => 'currency',
        'period' => 'period',
        'payout' => 'payout',
        'summary' => 'summary',
        'reserve' => 'reserve',
        'fees' => 'fees',
        'other_postings' => 'other_postings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'settled' => 'setSettled',
        'currency' => 'setCurrency',
        'period' => 'setPeriod',
        'payout' => 'setPayout',
        'summary' => 'setSummary',
        'reserve' => 'setReserve',
        'fees' => 'setFees',
        'other_postings' => 'setOtherPostings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'settled' => 'getSettled',
        'currency' => 'getCurrency',
        'period' => 'getPeriod',
        'payout' => 'getPayout',
        'summary' => 'getSummary',
        'reserve' => 'getReserve',
        'fees' => 'getFees',
        'other_postings' => 'getOtherPostings'
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
        $this->setIfExists('settled', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('period', $data ?? [], null);
        $this->setIfExists('payout', $data ?? [], null);
        $this->setIfExists('summary', $data ?? [], null);
        $this->setIfExists('reserve', $data ?? [], null);
        $this->setIfExists('fees', $data ?? [], null);
        $this->setIfExists('other_postings', $data ?? [], null);
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
     * Gets settled
     *
     * @return bool|null
     */
    public function getSettled()
    {
        return $this->container['settled'];
    }

    /**
     * Sets settled
     *
     * @param bool|null $settled 
     *
     * @return self
     */
    public function setSettled($settled)
    {
        if (is_null($settled)) {
            throw new \InvalidArgumentException('non-nullable settled cannot be null');
        }
        $this->container['settled'] = $settled;

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
     * Gets period
     *
     * @return \Pensopay\Client\Model\SettlementPeriod|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param \Pensopay\Client\Model\SettlementPeriod|null $period period
     *
     * @return self
     */
    public function setPeriod($period)
    {
        if (is_null($period)) {
            throw new \InvalidArgumentException('non-nullable period cannot be null');
        }
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets payout
     *
     * @return \Pensopay\Client\Model\SettlementPayoutReserve|null
     */
    public function getPayout()
    {
        return $this->container['payout'];
    }

    /**
     * Sets payout
     *
     * @param \Pensopay\Client\Model\SettlementPayoutReserve|null $payout payout
     *
     * @return self
     */
    public function setPayout($payout)
    {
        if (is_null($payout)) {
            throw new \InvalidArgumentException('non-nullable payout cannot be null');
        }
        $this->container['payout'] = $payout;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return \Pensopay\Client\Model\SettlementSummary|null
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param \Pensopay\Client\Model\SettlementSummary|null $summary summary
     *
     * @return self
     */
    public function setSummary($summary)
    {
        if (is_null($summary)) {
            throw new \InvalidArgumentException('non-nullable summary cannot be null');
        }
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets reserve
     *
     * @return \Pensopay\Client\Model\SettlementPayoutReserve|null
     */
    public function getReserve()
    {
        return $this->container['reserve'];
    }

    /**
     * Sets reserve
     *
     * @param \Pensopay\Client\Model\SettlementPayoutReserve|null $reserve reserve
     *
     * @return self
     */
    public function setReserve($reserve)
    {
        if (is_null($reserve)) {
            throw new \InvalidArgumentException('non-nullable reserve cannot be null');
        }
        $this->container['reserve'] = $reserve;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return \Pensopay\Client\Model\SettlementFees|null
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param \Pensopay\Client\Model\SettlementFees|null $fees fees
     *
     * @return self
     */
    public function setFees($fees)
    {
        if (is_null($fees)) {
            throw new \InvalidArgumentException('non-nullable fees cannot be null');
        }
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets other_postings
     *
     * @return \Pensopay\Client\Model\SettlementPosting[]|null
     */
    public function getOtherPostings()
    {
        return $this->container['other_postings'];
    }

    /**
     * Sets other_postings
     *
     * @param \Pensopay\Client\Model\SettlementPosting[]|null $other_postings 
     *
     * @return self
     */
    public function setOtherPostings($other_postings)
    {
        if (is_null($other_postings)) {
            throw new \InvalidArgumentException('non-nullable other_postings cannot be null');
        }
        $this->container['other_postings'] = $other_postings;

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


