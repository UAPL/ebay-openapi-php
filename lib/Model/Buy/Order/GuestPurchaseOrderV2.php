<?php
/**
 * GuestPurchaseOrderV2
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Ebay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Order API
 *
 * <span class=\"tablenote\"><b>Note:</b> This version of the Order API (v2) currently only supports the guest payment flow for eBay managed payments. To view the v1_beta version of the Order API, which includes both member and guest checkout payment flows, refer to the <a href=\"/api-docs/buy/order_v1/resources/methods\">Order_v1 API</a> documentation.</span><br /><br /><span class=\"tablenote\"><b>Note:</b> This is a <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"><img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\"  alt=\"Limited Release\" title=\"Limited Release\" />(Limited Release)</a> API available only to select developers approved by business units.</span><br /><br />The Order API provides interfaces that let shoppers pay for items. It also returns payment and shipping status of the order.
 *
 * The version of the OpenAPI document: v2.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ebay\Ebay\Model\Buy\Order;

use \ArrayAccess;
use \Ebay\ObjectSerializer;

/**
 * GuestPurchaseOrderV2 Class Doc Comment
 *
 * @category Class
 * @description A type that defines the fields for a guest purchase order.
 * @package  Ebay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GuestPurchaseOrderV2 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GuestPurchaseOrderV2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'line_items' => '\Ebay\Ebay\Model\Buy\Order\OrderLineItemV2[]',
        'pricing_summary' => '\Ebay\Ebay\Model\Buy\Order\PricingSummary',
        'purchase_order_creation_date' => 'string',
        'purchase_order_id' => 'string',
        'purchase_order_payment_status' => 'string',
        'purchase_order_status' => 'string',
        'refunded_amount' => '\Ebay\Ebay\Model\Buy\Order\Amount',
        'warnings' => '\Ebay\Ebay\Model\Buy\Order\Error[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'line_items' => null,
        'pricing_summary' => null,
        'purchase_order_creation_date' => null,
        'purchase_order_id' => null,
        'purchase_order_payment_status' => null,
        'purchase_order_status' => null,
        'refunded_amount' => null,
        'warnings' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'line_items' => 'lineItems',
        'pricing_summary' => 'pricingSummary',
        'purchase_order_creation_date' => 'purchaseOrderCreationDate',
        'purchase_order_id' => 'purchaseOrderId',
        'purchase_order_payment_status' => 'purchaseOrderPaymentStatus',
        'purchase_order_status' => 'purchaseOrderStatus',
        'refunded_amount' => 'refundedAmount',
        'warnings' => 'warnings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'line_items' => 'setLineItems',
        'pricing_summary' => 'setPricingSummary',
        'purchase_order_creation_date' => 'setPurchaseOrderCreationDate',
        'purchase_order_id' => 'setPurchaseOrderId',
        'purchase_order_payment_status' => 'setPurchaseOrderPaymentStatus',
        'purchase_order_status' => 'setPurchaseOrderStatus',
        'refunded_amount' => 'setRefundedAmount',
        'warnings' => 'setWarnings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'line_items' => 'getLineItems',
        'pricing_summary' => 'getPricingSummary',
        'purchase_order_creation_date' => 'getPurchaseOrderCreationDate',
        'purchase_order_id' => 'getPurchaseOrderId',
        'purchase_order_payment_status' => 'getPurchaseOrderPaymentStatus',
        'purchase_order_status' => 'getPurchaseOrderStatus',
        'refunded_amount' => 'getRefundedAmount',
        'warnings' => 'getWarnings'
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
        $this->container['line_items'] = $data['line_items'] ?? null;
        $this->container['pricing_summary'] = $data['pricing_summary'] ?? null;
        $this->container['purchase_order_creation_date'] = $data['purchase_order_creation_date'] ?? null;
        $this->container['purchase_order_id'] = $data['purchase_order_id'] ?? null;
        $this->container['purchase_order_payment_status'] = $data['purchase_order_payment_status'] ?? null;
        $this->container['purchase_order_status'] = $data['purchase_order_status'] ?? null;
        $this->container['refunded_amount'] = $data['refunded_amount'] ?? null;
        $this->container['warnings'] = $data['warnings'] ?? null;
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
     * Gets line_items
     *
     * @return \Ebay\Ebay\Model\Buy\Order\OrderLineItemV2[]|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Ebay\Ebay\Model\Buy\Order\OrderLineItemV2[]|null $line_items An array of line items in the order.
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets pricing_summary
     *
     * @return \Ebay\Ebay\Model\Buy\Order\PricingSummary|null
     */
    public function getPricingSummary()
    {
        return $this->container['pricing_summary'];
    }

    /**
     * Sets pricing_summary
     *
     * @param \Ebay\Ebay\Model\Buy\Order\PricingSummary|null $pricing_summary pricing_summary
     *
     * @return self
     */
    public function setPricingSummary($pricing_summary)
    {
        $this->container['pricing_summary'] = $pricing_summary;

        return $this;
    }

    /**
     * Gets purchase_order_creation_date
     *
     * @return string|null
     */
    public function getPurchaseOrderCreationDate()
    {
        return $this->container['purchase_order_creation_date'];
    }

    /**
     * Sets purchase_order_creation_date
     *
     * @param string|null $purchase_order_creation_date The creation date of the purchase order.
     *
     * @return self
     */
    public function setPurchaseOrderCreationDate($purchase_order_creation_date)
    {
        $this->container['purchase_order_creation_date'] = $purchase_order_creation_date;

        return $this;
    }

    /**
     * Gets purchase_order_id
     *
     * @return string|null
     */
    public function getPurchaseOrderId()
    {
        return $this->container['purchase_order_id'];
    }

    /**
     * Sets purchase_order_id
     *
     * @param string|null $purchase_order_id The unique identifier of the purchase order.
     *
     * @return self
     */
    public function setPurchaseOrderId($purchase_order_id)
    {
        $this->container['purchase_order_id'] = $purchase_order_id;

        return $this;
    }

    /**
     * Gets purchase_order_payment_status
     *
     * @return string|null
     */
    public function getPurchaseOrderPaymentStatus()
    {
        return $this->container['purchase_order_payment_status'];
    }

    /**
     * Sets purchase_order_payment_status
     *
     * @param string|null $purchase_order_payment_status A container that returns the payment status for the purchase order. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/order/types/gct:PurchaseOrderPaymentStatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setPurchaseOrderPaymentStatus($purchase_order_payment_status)
    {
        $this->container['purchase_order_payment_status'] = $purchase_order_payment_status;

        return $this;
    }

    /**
     * Gets purchase_order_status
     *
     * @return string|null
     */
    public function getPurchaseOrderStatus()
    {
        return $this->container['purchase_order_status'];
    }

    /**
     * Sets purchase_order_status
     *
     * @param string|null $purchase_order_status An enumeration value that indicates the current status of the buyer's payment and any refund that applies to the purchase order. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/buy/order/types/gct:PurchaseOrderStatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setPurchaseOrderStatus($purchase_order_status)
    {
        $this->container['purchase_order_status'] = $purchase_order_status;

        return $this;
    }

    /**
     * Gets refunded_amount
     *
     * @return \Ebay\Ebay\Model\Buy\Order\Amount|null
     */
    public function getRefundedAmount()
    {
        return $this->container['refunded_amount'];
    }

    /**
     * Sets refunded_amount
     *
     * @param \Ebay\Ebay\Model\Buy\Order\Amount|null $refunded_amount refunded_amount
     *
     * @return self
     */
    public function setRefundedAmount($refunded_amount)
    {
        $this->container['refunded_amount'] = $refunded_amount;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return \Ebay\Ebay\Model\Buy\Order\Error[]|null
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param \Ebay\Ebay\Model\Buy\Order\Error[]|null $warnings A container for any warning messages.
     *
     * @return self
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


