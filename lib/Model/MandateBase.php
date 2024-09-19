<?php
/**
 * MandateBase
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
 * MandateBase Class Doc Comment
 *
 * @category Class
 * @package  Pensopay\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MandateBase implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'mandateBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reference' => 'string',
        'methods' => 'string[]',
        'success_url' => 'string',
        'cancel_url' => 'string',
        'variables' => 'array<string,string>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'reference' => null,
        'methods' => null,
        'success_url' => 'uri',
        'cancel_url' => 'uri',
        'variables' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'reference' => false,
        'methods' => false,
        'success_url' => false,
        'cancel_url' => false,
        'variables' => false
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
        'reference' => 'reference',
        'methods' => 'methods',
        'success_url' => 'success_url',
        'cancel_url' => 'cancel_url',
        'variables' => 'variables'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reference' => 'setReference',
        'methods' => 'setMethods',
        'success_url' => 'setSuccessUrl',
        'cancel_url' => 'setCancelUrl',
        'variables' => 'setVariables'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reference' => 'getReference',
        'methods' => 'getMethods',
        'success_url' => 'getSuccessUrl',
        'cancel_url' => 'getCancelUrl',
        'variables' => 'getVariables'
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

    public const METHODS_CARD = 'card';
    public const METHODS_MOBILEPAY = 'mobilepay';
    public const METHODS_APPLEPAY = 'applepay';
    public const METHODS_GOOGLEPAY = 'googlepay';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMethodsAllowableValues()
    {
        return [
            self::METHODS_CARD,
            self::METHODS_MOBILEPAY,
            self::METHODS_APPLEPAY,
            self::METHODS_GOOGLEPAY,
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
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('methods', $data ?? [], null);
        $this->setIfExists('success_url', $data ?? [], null);
        $this->setIfExists('cancel_url', $data ?? [], null);
        $this->setIfExists('variables', $data ?? [], null);
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

        if ($this->container['reference'] === null) {
            $invalidProperties[] = "'reference' can't be null";
        }
        if ((mb_strlen($this->container['reference']) < 1)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['success_url']) && !preg_match("/^https:\/\//", $this->container['success_url'])) {
            $invalidProperties[] = "invalid value for 'success_url', must be conform to the pattern /^https:\/\//.";
        }

        if (!is_null($this->container['cancel_url']) && !preg_match("/^https:\/\//", $this->container['cancel_url'])) {
            $invalidProperties[] = "invalid value for 'cancel_url', must be conform to the pattern /^https:\/\//.";
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
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference reference
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
        }

        if ((mb_strlen($reference) < 1)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling MandateBase., must be bigger than or equal to 1.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets methods
     *
     * @return string[]|null
     */
    public function getMethods()
    {
        return $this->container['methods'];
    }

    /**
     * Sets methods
     *
     * @param string[]|null $methods Payment methods that will be available for the subscription.   - card   - mobilepay   - applepay   - googlepay
     *
     * @return self
     */
    public function setMethods($methods)
    {
        if (is_null($methods)) {
            throw new \InvalidArgumentException('non-nullable methods cannot be null');
        }
        $allowedValues = $this->getMethodsAllowableValues();
        if (array_diff($methods, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'methods', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['methods'] = $methods;

        return $this;
    }

    /**
     * Gets success_url
     *
     * @return string|null
     */
    public function getSuccessUrl()
    {
        return $this->container['success_url'];
    }

    /**
     * Sets success_url
     *
     * @param string|null $success_url success_url
     *
     * @return self
     */
    public function setSuccessUrl($success_url)
    {
        if (is_null($success_url)) {
            throw new \InvalidArgumentException('non-nullable success_url cannot be null');
        }

        if ((!preg_match("/^https:\/\//", ObjectSerializer::toString($success_url)))) {
            throw new \InvalidArgumentException("invalid value for \$success_url when calling MandateBase., must conform to the pattern /^https:\/\//.");
        }

        $this->container['success_url'] = $success_url;

        return $this;
    }

    /**
     * Gets cancel_url
     *
     * @return string|null
     */
    public function getCancelUrl()
    {
        return $this->container['cancel_url'];
    }

    /**
     * Sets cancel_url
     *
     * @param string|null $cancel_url cancel_url
     *
     * @return self
     */
    public function setCancelUrl($cancel_url)
    {
        if (is_null($cancel_url)) {
            throw new \InvalidArgumentException('non-nullable cancel_url cannot be null');
        }

        if ((!preg_match("/^https:\/\//", ObjectSerializer::toString($cancel_url)))) {
            throw new \InvalidArgumentException("invalid value for \$cancel_url when calling MandateBase., must conform to the pattern /^https:\/\//.");
        }

        $this->container['cancel_url'] = $cancel_url;

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


