<?php
/**
 * TestFeeRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  PensoPay\Client
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

namespace PensoPay\Client\Model;

use \ArrayAccess;
use \PensoPay\Client\ObjectSerializer;

/**
 * TestFeeRequest Class Doc Comment
 *
 * @category Class
 * @package  PensoPay\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TestFeeRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TestFeeRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'int',
        'country' => 'string',
        'segment' => 'string',
        'funding' => 'string',
        'scheme' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'country' => null,
        'segment' => null,
        'funding' => null,
        'scheme' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'amount' => false,
        'country' => false,
        'segment' => false,
        'funding' => false,
        'scheme' => false
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
        'amount' => 'amount',
        'country' => 'country',
        'segment' => 'segment',
        'funding' => 'funding',
        'scheme' => 'scheme'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'country' => 'setCountry',
        'segment' => 'setSegment',
        'funding' => 'setFunding',
        'scheme' => 'setScheme'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'country' => 'getCountry',
        'segment' => 'getSegment',
        'funding' => 'getFunding',
        'scheme' => 'getScheme'
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

    public const SEGMENT_CONSUMER = 'consumer';
    public const SEGMENT_BUSINESS = 'business';
    public const SEGMENT_COMMERCIAL = 'commercial';
    public const SEGMENT_GOVERNMENT = 'government';
    public const SEGMENT_ALL = 'all';
    public const SEGMENT_PAYOUTS = 'payouts';
    public const FUNDING_DEFERRED_DEBIT = 'deferred_debit';
    public const FUNDING_PREPAID = 'prepaid';
    public const FUNDING_PREPAID_RELOADABLE = 'prepaid_reloadable';
    public const FUNDING_CHARGE = 'charge';
    public const FUNDING_CREDIT = 'credit';
    public const FUNDING_DEBIT = 'debit';
    public const SCHEME_VISA = 'visa';
    public const SCHEME_MASTERCARD = 'mastercard';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSegmentAllowableValues()
    {
        return [
            self::SEGMENT_CONSUMER,
            self::SEGMENT_BUSINESS,
            self::SEGMENT_COMMERCIAL,
            self::SEGMENT_GOVERNMENT,
            self::SEGMENT_ALL,
            self::SEGMENT_PAYOUTS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFundingAllowableValues()
    {
        return [
            self::FUNDING_DEFERRED_DEBIT,
            self::FUNDING_PREPAID,
            self::FUNDING_PREPAID_RELOADABLE,
            self::FUNDING_CHARGE,
            self::FUNDING_CREDIT,
            self::FUNDING_DEBIT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSchemeAllowableValues()
    {
        return [
            self::SCHEME_VISA,
            self::SCHEME_MASTERCARD,
        ];
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('segment', $data ?? [], null);
        $this->setIfExists('funding', $data ?? [], null);
        $this->setIfExists('scheme', $data ?? [], null);
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

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ((mb_strlen($this->container['country']) > 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['country']) < 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['segment'] === null) {
            $invalidProperties[] = "'segment' can't be null";
        }
        $allowedValues = $this->getSegmentAllowableValues();
        if (!is_null($this->container['segment']) && !in_array($this->container['segment'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'segment', must be one of '%s'",
                $this->container['segment'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['funding'] === null) {
            $invalidProperties[] = "'funding' can't be null";
        }
        $allowedValues = $this->getFundingAllowableValues();
        if (!is_null($this->container['funding']) && !in_array($this->container['funding'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'funding', must be one of '%s'",
                $this->container['funding'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['scheme'] === null) {
            $invalidProperties[] = "'scheme' can't be null";
        }
        $allowedValues = $this->getSchemeAllowableValues();
        if (!is_null($this->container['scheme']) && !in_array($this->container['scheme'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'scheme', must be one of '%s'",
                $this->container['scheme'],
                implode("', '", $allowedValues)
            );
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
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount amount
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
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        if ((mb_strlen($country) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling TestFeeRequest., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($country) < 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling TestFeeRequest., must be bigger than or equal to 2.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets segment
     *
     * @return string
     */
    public function getSegment()
    {
        return $this->container['segment'];
    }

    /**
     * Sets segment
     *
     * @param string $segment segment
     *
     * @return self
     */
    public function setSegment($segment)
    {
        if (is_null($segment)) {
            throw new \InvalidArgumentException('non-nullable segment cannot be null');
        }
        $allowedValues = $this->getSegmentAllowableValues();
        if (!in_array($segment, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'segment', must be one of '%s'",
                    $segment,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['segment'] = $segment;

        return $this;
    }

    /**
     * Gets funding
     *
     * @return string
     */
    public function getFunding()
    {
        return $this->container['funding'];
    }

    /**
     * Sets funding
     *
     * @param string $funding funding
     *
     * @return self
     */
    public function setFunding($funding)
    {
        if (is_null($funding)) {
            throw new \InvalidArgumentException('non-nullable funding cannot be null');
        }
        $allowedValues = $this->getFundingAllowableValues();
        if (!in_array($funding, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'funding', must be one of '%s'",
                    $funding,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['funding'] = $funding;

        return $this;
    }

    /**
     * Gets scheme
     *
     * @return string
     */
    public function getScheme()
    {
        return $this->container['scheme'];
    }

    /**
     * Sets scheme
     *
     * @param string $scheme scheme
     *
     * @return self
     */
    public function setScheme($scheme)
    {
        if (is_null($scheme)) {
            throw new \InvalidArgumentException('non-nullable scheme cannot be null');
        }
        $allowedValues = $this->getSchemeAllowableValues();
        if (!in_array($scheme, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'scheme', must be one of '%s'",
                    $scheme,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['scheme'] = $scheme;

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


