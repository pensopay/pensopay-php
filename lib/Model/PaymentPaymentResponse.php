<?php
/**
 * PaymentPaymentResponse
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
 * PaymentPaymentResponse Class Doc Comment
 *
 * @category Class
 * @package  Pensopay\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentPaymentResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'payment.PaymentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'int',
        'autocapture' => 'bool',
        'callback_url' => 'string',
        'cancel_url' => 'string',
        'captured' => 'int',
        'created_at' => 'string',
        'currency' => 'string',
        'facilitator' => 'string',
        'acquirer' => 'string',
        'id' => 'int',
        'link' => 'string',
        'link_uuid' => 'string',
        'methods' => 'string[]',
        'order' => '\Pensopay\Client\Model\PaymentPaymentOrder',
        'order_id' => 'string',
        'reference' => 'string',
        'refunded' => 'int',
        'state' => 'string',
        'success_url' => 'string',
        'testmode' => 'bool',
        'updated_at' => 'string',
        'variables' => 'array<string,string>',
        'payment_details' => 'array<string,string>'
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
        'autocapture' => null,
        'callback_url' => null,
        'cancel_url' => null,
        'captured' => null,
        'created_at' => null,
        'currency' => null,
        'facilitator' => null,
        'acquirer' => null,
        'id' => null,
        'link' => null,
        'link_uuid' => null,
        'methods' => null,
        'order' => null,
        'order_id' => null,
        'reference' => null,
        'refunded' => null,
        'state' => null,
        'success_url' => null,
        'testmode' => null,
        'updated_at' => null,
        'variables' => null,
        'payment_details' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'amount' => false,
        'autocapture' => false,
        'callback_url' => false,
        'cancel_url' => false,
        'captured' => false,
        'created_at' => false,
        'currency' => false,
        'facilitator' => false,
        'acquirer' => false,
        'id' => false,
        'link' => false,
        'link_uuid' => false,
        'methods' => false,
        'order' => false,
        'order_id' => false,
        'reference' => false,
        'refunded' => false,
        'state' => false,
        'success_url' => false,
        'testmode' => false,
        'updated_at' => false,
        'variables' => false,
        'payment_details' => false
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
        'autocapture' => 'autocapture',
        'callback_url' => 'callback_url',
        'cancel_url' => 'cancel_url',
        'captured' => 'captured',
        'created_at' => 'created_at',
        'currency' => 'currency',
        'facilitator' => 'facilitator',
        'acquirer' => 'acquirer',
        'id' => 'id',
        'link' => 'link',
        'link_uuid' => 'link_uuid',
        'methods' => 'methods',
        'order' => 'order',
        'order_id' => 'order_id',
        'reference' => 'reference',
        'refunded' => 'refunded',
        'state' => 'state',
        'success_url' => 'success_url',
        'testmode' => 'testmode',
        'updated_at' => 'updated_at',
        'variables' => 'variables',
        'payment_details' => 'payment_details'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'autocapture' => 'setAutocapture',
        'callback_url' => 'setCallbackUrl',
        'cancel_url' => 'setCancelUrl',
        'captured' => 'setCaptured',
        'created_at' => 'setCreatedAt',
        'currency' => 'setCurrency',
        'facilitator' => 'setFacilitator',
        'acquirer' => 'setAcquirer',
        'id' => 'setId',
        'link' => 'setLink',
        'link_uuid' => 'setLinkUuid',
        'methods' => 'setMethods',
        'order' => 'setOrder',
        'order_id' => 'setOrderId',
        'reference' => 'setReference',
        'refunded' => 'setRefunded',
        'state' => 'setState',
        'success_url' => 'setSuccessUrl',
        'testmode' => 'setTestmode',
        'updated_at' => 'setUpdatedAt',
        'variables' => 'setVariables',
        'payment_details' => 'setPaymentDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'autocapture' => 'getAutocapture',
        'callback_url' => 'getCallbackUrl',
        'cancel_url' => 'getCancelUrl',
        'captured' => 'getCaptured',
        'created_at' => 'getCreatedAt',
        'currency' => 'getCurrency',
        'facilitator' => 'getFacilitator',
        'acquirer' => 'getAcquirer',
        'id' => 'getId',
        'link' => 'getLink',
        'link_uuid' => 'getLinkUuid',
        'methods' => 'getMethods',
        'order' => 'getOrder',
        'order_id' => 'getOrderId',
        'reference' => 'getReference',
        'refunded' => 'getRefunded',
        'state' => 'getState',
        'success_url' => 'getSuccessUrl',
        'testmode' => 'getTestmode',
        'updated_at' => 'getUpdatedAt',
        'variables' => 'getVariables',
        'payment_details' => 'getPaymentDetails'
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('autocapture', $data ?? [], null);
        $this->setIfExists('callback_url', $data ?? [], null);
        $this->setIfExists('cancel_url', $data ?? [], null);
        $this->setIfExists('captured', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('facilitator', $data ?? [], null);
        $this->setIfExists('acquirer', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('link', $data ?? [], null);
        $this->setIfExists('link_uuid', $data ?? [], null);
        $this->setIfExists('methods', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('refunded', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('success_url', $data ?? [], null);
        $this->setIfExists('testmode', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('variables', $data ?? [], null);
        $this->setIfExists('payment_details', $data ?? [], null);
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
        if ($this->container['autocapture'] === null) {
            $invalidProperties[] = "'autocapture' can't be null";
        }
        if ($this->container['callback_url'] === null) {
            $invalidProperties[] = "'callback_url' can't be null";
        }
        if ($this->container['cancel_url'] === null) {
            $invalidProperties[] = "'cancel_url' can't be null";
        }
        if ($this->container['captured'] === null) {
            $invalidProperties[] = "'captured' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['facilitator'] === null) {
            $invalidProperties[] = "'facilitator' can't be null";
        }
        if ($this->container['acquirer'] === null) {
            $invalidProperties[] = "'acquirer' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['link'] === null) {
            $invalidProperties[] = "'link' can't be null";
        }
        if ($this->container['link_uuid'] === null) {
            $invalidProperties[] = "'link_uuid' can't be null";
        }
        if ($this->container['methods'] === null) {
            $invalidProperties[] = "'methods' can't be null";
        }
        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['reference'] === null) {
            $invalidProperties[] = "'reference' can't be null";
        }
        if ($this->container['refunded'] === null) {
            $invalidProperties[] = "'refunded' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['success_url'] === null) {
            $invalidProperties[] = "'success_url' can't be null";
        }
        if ($this->container['testmode'] === null) {
            $invalidProperties[] = "'testmode' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['variables'] === null) {
            $invalidProperties[] = "'variables' can't be null";
        }
        if ($this->container['payment_details'] === null) {
            $invalidProperties[] = "'payment_details' can't be null";
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
     * Gets autocapture
     *
     * @return bool
     */
    public function getAutocapture()
    {
        return $this->container['autocapture'];
    }

    /**
     * Sets autocapture
     *
     * @param bool $autocapture autocapture
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
     * Gets callback_url
     *
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->container['callback_url'];
    }

    /**
     * Sets callback_url
     *
     * @param string $callback_url callback_url
     *
     * @return self
     */
    public function setCallbackUrl($callback_url)
    {
        if (is_null($callback_url)) {
            throw new \InvalidArgumentException('non-nullable callback_url cannot be null');
        }
        $this->container['callback_url'] = $callback_url;

        return $this;
    }

    /**
     * Gets cancel_url
     *
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->container['cancel_url'];
    }

    /**
     * Sets cancel_url
     *
     * @param string $cancel_url cancel_url
     *
     * @return self
     */
    public function setCancelUrl($cancel_url)
    {
        if (is_null($cancel_url)) {
            throw new \InvalidArgumentException('non-nullable cancel_url cannot be null');
        }
        $this->container['cancel_url'] = $cancel_url;

        return $this;
    }

    /**
     * Gets captured
     *
     * @return int
     */
    public function getCaptured()
    {
        return $this->container['captured'];
    }

    /**
     * Sets captured
     *
     * @param int $captured captured
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
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
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
     * Gets facilitator
     *
     * @return string
     */
    public function getFacilitator()
    {
        return $this->container['facilitator'];
    }

    /**
     * Sets facilitator
     *
     * @param string $facilitator facilitator
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
     * Gets acquirer
     *
     * @return string
     */
    public function getAcquirer()
    {
        return $this->container['acquirer'];
    }

    /**
     * Sets acquirer
     *
     * @param string $acquirer acquirer
     *
     * @return self
     */
    public function setAcquirer($acquirer)
    {
        if (is_null($acquirer)) {
            throw new \InvalidArgumentException('non-nullable acquirer cannot be null');
        }
        $this->container['acquirer'] = $acquirer;

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
     * Gets link_uuid
     *
     * @return string
     */
    public function getLinkUuid()
    {
        return $this->container['link_uuid'];
    }

    /**
     * Sets link_uuid
     *
     * @param string $link_uuid link_uuid
     *
     * @return self
     */
    public function setLinkUuid($link_uuid)
    {
        if (is_null($link_uuid)) {
            throw new \InvalidArgumentException('non-nullable link_uuid cannot be null');
        }
        $this->container['link_uuid'] = $link_uuid;

        return $this;
    }

    /**
     * Gets methods
     *
     * @return string[]
     */
    public function getMethods()
    {
        return $this->container['methods'];
    }

    /**
     * Sets methods
     *
     * @param string[] $methods methods
     *
     * @return self
     */
    public function setMethods($methods)
    {
        if (is_null($methods)) {
            throw new \InvalidArgumentException('non-nullable methods cannot be null');
        }
        $this->container['methods'] = $methods;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \Pensopay\Client\Model\PaymentPaymentOrder
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \Pensopay\Client\Model\PaymentPaymentOrder $order order
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
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets refunded
     *
     * @return int
     */
    public function getRefunded()
    {
        return $this->container['refunded'];
    }

    /**
     * Sets refunded
     *
     * @param int $refunded refunded
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
     * Gets success_url
     *
     * @return string
     */
    public function getSuccessUrl()
    {
        return $this->container['success_url'];
    }

    /**
     * Sets success_url
     *
     * @param string $success_url success_url
     *
     * @return self
     */
    public function setSuccessUrl($success_url)
    {
        if (is_null($success_url)) {
            throw new \InvalidArgumentException('non-nullable success_url cannot be null');
        }
        $this->container['success_url'] = $success_url;

        return $this;
    }

    /**
     * Gets testmode
     *
     * @return bool
     */
    public function getTestmode()
    {
        return $this->container['testmode'];
    }

    /**
     * Sets testmode
     *
     * @param bool $testmode testmode
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
     * Gets variables
     *
     * @return array<string,string>
     */
    public function getVariables()
    {
        return $this->container['variables'];
    }

    /**
     * Sets variables
     *
     * @param array<string,string> $variables variables
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
     * Gets payment_details
     *
     * @return array<string,string>
     */
    public function getPaymentDetails()
    {
        return $this->container['payment_details'];
    }

    /**
     * Sets payment_details
     *
     * @param array<string,string> $payment_details payment_details
     *
     * @return self
     */
    public function setPaymentDetails($payment_details)
    {
        if (is_null($payment_details)) {
            throw new \InvalidArgumentException('non-nullable payment_details cannot be null');
        }
        $this->container['payment_details'] = $payment_details;

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


