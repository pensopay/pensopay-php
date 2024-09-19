<?php
/**
 * SettlementFees
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
 * SettlementFees Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Pensopay\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SettlementFees implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SettlementFees';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sales' => 'int',
        'refunds' => 'int',
        'authorisations' => 'int',
        'credits' => 'int',
        'interchange' => 'int',
        'scheme' => 'int',
        'minimum_processing' => 'int',
        'service' => 'int',
        'wire_transfer' => 'int',
        'chargebacks' => 'int',
        'retrieval_requests' => 'int',
        'series' => 'int',
        '_3dsecure' => 'int',
        'late_capture' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sales' => null,
        'refunds' => null,
        'authorisations' => null,
        'credits' => null,
        'interchange' => null,
        'scheme' => null,
        'minimum_processing' => null,
        'service' => null,
        'wire_transfer' => null,
        'chargebacks' => null,
        'retrieval_requests' => null,
        'series' => null,
        '_3dsecure' => null,
        'late_capture' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sales' => false,
        'refunds' => false,
        'authorisations' => false,
        'credits' => false,
        'interchange' => false,
        'scheme' => false,
        'minimum_processing' => false,
        'service' => false,
        'wire_transfer' => false,
        'chargebacks' => false,
        'retrieval_requests' => false,
        'series' => false,
        '_3dsecure' => false,
        'late_capture' => false
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
        'sales' => 'sales',
        'refunds' => 'refunds',
        'authorisations' => 'authorisations',
        'credits' => 'credits',
        'interchange' => 'interchange',
        'scheme' => 'scheme',
        'minimum_processing' => 'minimum_processing',
        'service' => 'service',
        'wire_transfer' => 'wire_transfer',
        'chargebacks' => 'chargebacks',
        'retrieval_requests' => 'retrieval_requests',
        'series' => 'series',
        '_3dsecure' => '3dsecure',
        'late_capture' => 'late_capture'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sales' => 'setSales',
        'refunds' => 'setRefunds',
        'authorisations' => 'setAuthorisations',
        'credits' => 'setCredits',
        'interchange' => 'setInterchange',
        'scheme' => 'setScheme',
        'minimum_processing' => 'setMinimumProcessing',
        'service' => 'setService',
        'wire_transfer' => 'setWireTransfer',
        'chargebacks' => 'setChargebacks',
        'retrieval_requests' => 'setRetrievalRequests',
        'series' => 'setSeries',
        '_3dsecure' => 'set3dsecure',
        'late_capture' => 'setLateCapture'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sales' => 'getSales',
        'refunds' => 'getRefunds',
        'authorisations' => 'getAuthorisations',
        'credits' => 'getCredits',
        'interchange' => 'getInterchange',
        'scheme' => 'getScheme',
        'minimum_processing' => 'getMinimumProcessing',
        'service' => 'getService',
        'wire_transfer' => 'getWireTransfer',
        'chargebacks' => 'getChargebacks',
        'retrieval_requests' => 'getRetrievalRequests',
        'series' => 'getSeries',
        '_3dsecure' => 'get3dsecure',
        'late_capture' => 'getLateCapture'
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
        $this->setIfExists('sales', $data ?? [], null);
        $this->setIfExists('refunds', $data ?? [], null);
        $this->setIfExists('authorisations', $data ?? [], null);
        $this->setIfExists('credits', $data ?? [], null);
        $this->setIfExists('interchange', $data ?? [], null);
        $this->setIfExists('scheme', $data ?? [], null);
        $this->setIfExists('minimum_processing', $data ?? [], null);
        $this->setIfExists('service', $data ?? [], null);
        $this->setIfExists('wire_transfer', $data ?? [], null);
        $this->setIfExists('chargebacks', $data ?? [], null);
        $this->setIfExists('retrieval_requests', $data ?? [], null);
        $this->setIfExists('series', $data ?? [], null);
        $this->setIfExists('_3dsecure', $data ?? [], null);
        $this->setIfExists('late_capture', $data ?? [], null);
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
     * Gets sales
     *
     * @return int|null
     */
    public function getSales()
    {
        return $this->container['sales'];
    }

    /**
     * Sets sales
     *
     * @param int|null $sales 
     *
     * @return self
     */
    public function setSales($sales)
    {
        if (is_null($sales)) {
            throw new \InvalidArgumentException('non-nullable sales cannot be null');
        }
        $this->container['sales'] = $sales;

        return $this;
    }

    /**
     * Gets refunds
     *
     * @return int|null
     */
    public function getRefunds()
    {
        return $this->container['refunds'];
    }

    /**
     * Sets refunds
     *
     * @param int|null $refunds 
     *
     * @return self
     */
    public function setRefunds($refunds)
    {
        if (is_null($refunds)) {
            throw new \InvalidArgumentException('non-nullable refunds cannot be null');
        }
        $this->container['refunds'] = $refunds;

        return $this;
    }

    /**
     * Gets authorisations
     *
     * @return int|null
     */
    public function getAuthorisations()
    {
        return $this->container['authorisations'];
    }

    /**
     * Sets authorisations
     *
     * @param int|null $authorisations 
     *
     * @return self
     */
    public function setAuthorisations($authorisations)
    {
        if (is_null($authorisations)) {
            throw new \InvalidArgumentException('non-nullable authorisations cannot be null');
        }
        $this->container['authorisations'] = $authorisations;

        return $this;
    }

    /**
     * Gets credits
     *
     * @return int|null
     */
    public function getCredits()
    {
        return $this->container['credits'];
    }

    /**
     * Sets credits
     *
     * @param int|null $credits 
     *
     * @return self
     */
    public function setCredits($credits)
    {
        if (is_null($credits)) {
            throw new \InvalidArgumentException('non-nullable credits cannot be null');
        }
        $this->container['credits'] = $credits;

        return $this;
    }

    /**
     * Gets interchange
     *
     * @return int|null
     */
    public function getInterchange()
    {
        return $this->container['interchange'];
    }

    /**
     * Sets interchange
     *
     * @param int|null $interchange 
     *
     * @return self
     */
    public function setInterchange($interchange)
    {
        if (is_null($interchange)) {
            throw new \InvalidArgumentException('non-nullable interchange cannot be null');
        }
        $this->container['interchange'] = $interchange;

        return $this;
    }

    /**
     * Gets scheme
     *
     * @return int|null
     */
    public function getScheme()
    {
        return $this->container['scheme'];
    }

    /**
     * Sets scheme
     *
     * @param int|null $scheme 
     *
     * @return self
     */
    public function setScheme($scheme)
    {
        if (is_null($scheme)) {
            throw new \InvalidArgumentException('non-nullable scheme cannot be null');
        }
        $this->container['scheme'] = $scheme;

        return $this;
    }

    /**
     * Gets minimum_processing
     *
     * @return int|null
     */
    public function getMinimumProcessing()
    {
        return $this->container['minimum_processing'];
    }

    /**
     * Sets minimum_processing
     *
     * @param int|null $minimum_processing 
     *
     * @return self
     */
    public function setMinimumProcessing($minimum_processing)
    {
        if (is_null($minimum_processing)) {
            throw new \InvalidArgumentException('non-nullable minimum_processing cannot be null');
        }
        $this->container['minimum_processing'] = $minimum_processing;

        return $this;
    }

    /**
     * Gets service
     *
     * @return int|null
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     *
     * @param int|null $service 
     *
     * @return self
     */
    public function setService($service)
    {
        if (is_null($service)) {
            throw new \InvalidArgumentException('non-nullable service cannot be null');
        }
        $this->container['service'] = $service;

        return $this;
    }

    /**
     * Gets wire_transfer
     *
     * @return int|null
     */
    public function getWireTransfer()
    {
        return $this->container['wire_transfer'];
    }

    /**
     * Sets wire_transfer
     *
     * @param int|null $wire_transfer 
     *
     * @return self
     */
    public function setWireTransfer($wire_transfer)
    {
        if (is_null($wire_transfer)) {
            throw new \InvalidArgumentException('non-nullable wire_transfer cannot be null');
        }
        $this->container['wire_transfer'] = $wire_transfer;

        return $this;
    }

    /**
     * Gets chargebacks
     *
     * @return int|null
     */
    public function getChargebacks()
    {
        return $this->container['chargebacks'];
    }

    /**
     * Sets chargebacks
     *
     * @param int|null $chargebacks 
     *
     * @return self
     */
    public function setChargebacks($chargebacks)
    {
        if (is_null($chargebacks)) {
            throw new \InvalidArgumentException('non-nullable chargebacks cannot be null');
        }
        $this->container['chargebacks'] = $chargebacks;

        return $this;
    }

    /**
     * Gets retrieval_requests
     *
     * @return int|null
     */
    public function getRetrievalRequests()
    {
        return $this->container['retrieval_requests'];
    }

    /**
     * Sets retrieval_requests
     *
     * @param int|null $retrieval_requests 
     *
     * @return self
     */
    public function setRetrievalRequests($retrieval_requests)
    {
        if (is_null($retrieval_requests)) {
            throw new \InvalidArgumentException('non-nullable retrieval_requests cannot be null');
        }
        $this->container['retrieval_requests'] = $retrieval_requests;

        return $this;
    }

    /**
     * Gets series
     *
     * @return int|null
     */
    public function getSeries()
    {
        return $this->container['series'];
    }

    /**
     * Sets series
     *
     * @param int|null $series 
     *
     * @return self
     */
    public function setSeries($series)
    {
        if (is_null($series)) {
            throw new \InvalidArgumentException('non-nullable series cannot be null');
        }
        $this->container['series'] = $series;

        return $this;
    }

    /**
     * Gets _3dsecure
     *
     * @return int|null
     */
    public function get3dsecure()
    {
        return $this->container['_3dsecure'];
    }

    /**
     * Sets _3dsecure
     *
     * @param int|null $_3dsecure 
     *
     * @return self
     */
    public function set3dsecure($_3dsecure)
    {
        if (is_null($_3dsecure)) {
            throw new \InvalidArgumentException('non-nullable _3dsecure cannot be null');
        }
        $this->container['_3dsecure'] = $_3dsecure;

        return $this;
    }

    /**
     * Gets late_capture
     *
     * @return int|null
     */
    public function getLateCapture()
    {
        return $this->container['late_capture'];
    }

    /**
     * Sets late_capture
     *
     * @param int|null $late_capture 
     *
     * @return self
     */
    public function setLateCapture($late_capture)
    {
        if (is_null($late_capture)) {
            throw new \InvalidArgumentException('non-nullable late_capture cannot be null');
        }
        $this->container['late_capture'] = $late_capture;

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


