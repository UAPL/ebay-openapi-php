<?php
/**
 * PricingSummaryV2
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

namespace Ebay\Model\Buy\Order;

use \ArrayAccess;
use \Ebay\ObjectSerializer;

/**
 * PricingSummaryV2 Class Doc Comment
 *
 * @category Class
 * @description A type that returns cost details for all of the line items in the order, such as tax, item price, delivery cost, and discounts.
 * @package  Ebay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PricingSummaryV2 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PricingSummaryV2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_savings' => '\Ebay\Model\Buy\Order\Amount',
        'adjustment' => '\Ebay\Model\Buy\Order\Adjustment',
        'delivery_cost' => '\Ebay\Model\Buy\Order\Amount',
        'fee' => '\Ebay\Model\Buy\Order\Amount',
        'import_charges' => '\Ebay\Model\Buy\Order\Amount',
        'import_tax' => '\Ebay\Model\Buy\Order\ImportTax',
        'price_discount' => '\Ebay\Model\Buy\Order\Amount',
        'price_subtotal' => '\Ebay\Model\Buy\Order\Amount',
        'tax' => '\Ebay\Model\Buy\Order\Amount',
        'total' => '\Ebay\Model\Buy\Order\Amount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additional_savings' => null,
        'adjustment' => null,
        'delivery_cost' => null,
        'fee' => null,
        'import_charges' => null,
        'import_tax' => null,
        'price_discount' => null,
        'price_subtotal' => null,
        'tax' => null,
        'total' => null
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
        'additional_savings' => 'additionalSavings',
        'adjustment' => 'adjustment',
        'delivery_cost' => 'deliveryCost',
        'fee' => 'fee',
        'import_charges' => 'importCharges',
        'import_tax' => 'importTax',
        'price_discount' => 'priceDiscount',
        'price_subtotal' => 'priceSubtotal',
        'tax' => 'tax',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_savings' => 'setAdditionalSavings',
        'adjustment' => 'setAdjustment',
        'delivery_cost' => 'setDeliveryCost',
        'fee' => 'setFee',
        'import_charges' => 'setImportCharges',
        'import_tax' => 'setImportTax',
        'price_discount' => 'setPriceDiscount',
        'price_subtotal' => 'setPriceSubtotal',
        'tax' => 'setTax',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_savings' => 'getAdditionalSavings',
        'adjustment' => 'getAdjustment',
        'delivery_cost' => 'getDeliveryCost',
        'fee' => 'getFee',
        'import_charges' => 'getImportCharges',
        'import_tax' => 'getImportTax',
        'price_discount' => 'getPriceDiscount',
        'price_subtotal' => 'getPriceSubtotal',
        'tax' => 'getTax',
        'total' => 'getTotal'
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
        $this->container['additional_savings'] = $data['additional_savings'] ?? null;
        $this->container['adjustment'] = $data['adjustment'] ?? null;
        $this->container['delivery_cost'] = $data['delivery_cost'] ?? null;
        $this->container['fee'] = $data['fee'] ?? null;
        $this->container['import_charges'] = $data['import_charges'] ?? null;
        $this->container['import_tax'] = $data['import_tax'] ?? null;
        $this->container['price_discount'] = $data['price_discount'] ?? null;
        $this->container['price_subtotal'] = $data['price_subtotal'] ?? null;
        $this->container['tax'] = $data['tax'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
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
     * Gets additional_savings
     *
     * @return \Ebay\Model\Buy\Order\Amount|null
     */
    public function getAdditionalSavings()
    {
        return $this->container['additional_savings'];
    }

    /**
     * Sets additional_savings
     *
     * @param \Ebay\Model\Buy\Order\Amount|null $additional_savings additional_savings
     *
     * @return self
     */
    public function setAdditionalSavings($additional_savings)
    {
        $this->container['additional_savings'] = $additional_savings;

        return $this;
    }

    /**
     * Gets adjustment
     *
     * @return \Ebay\Model\Buy\Order\Adjustment|null
     */
    public function getAdjustment()
    {
        return $this->container['adjustment'];
    }

    /**
     * Sets adjustment
     *
     * @param \Ebay\Model\Buy\Order\Adjustment|null $adjustment adjustment
     *
     * @return self
     */
    public function setAdjustment($adjustment)
    {
        $this->container['adjustment'] = $adjustment;

        return $this;
    }

    /**
     * Gets delivery_cost
     *
     * @return \Ebay\Model\Buy\Order\Amount|null
     */
    public function getDeliveryCost()
    {
        return $this->container['delivery_cost'];
    }

    /**
     * Sets delivery_cost
     *
     * @param \Ebay\Model\Buy\Order\Amount|null $delivery_cost delivery_cost
     *
     * @return self
     */
    public function setDeliveryCost($delivery_cost)
    {
        $this->container['delivery_cost'] = $delivery_cost;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return \Ebay\Model\Buy\Order\Amount|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param \Ebay\Model\Buy\Order\Amount|null $fee fee
     *
     * @return self
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets import_charges
     *
     * @return \Ebay\Model\Buy\Order\Amount|null
     */
    public function getImportCharges()
    {
        return $this->container['import_charges'];
    }

    /**
     * Sets import_charges
     *
     * @param \Ebay\Model\Buy\Order\Amount|null $import_charges import_charges
     *
     * @return self
     */
    public function setImportCharges($import_charges)
    {
        $this->container['import_charges'] = $import_charges;

        return $this;
    }

    /**
     * Gets import_tax
     *
     * @return \Ebay\Model\Buy\Order\ImportTax|null
     */
    public function getImportTax()
    {
        return $this->container['import_tax'];
    }

    /**
     * Sets import_tax
     *
     * @param \Ebay\Model\Buy\Order\ImportTax|null $import_tax import_tax
     *
     * @return self
     */
    public function setImportTax($import_tax)
    {
        $this->container['import_tax'] = $import_tax;

        return $this;
    }

    /**
     * Gets price_discount
     *
     * @return \Ebay\Model\Buy\Order\Amount|null
     */
    public function getPriceDiscount()
    {
        return $this->container['price_discount'];
    }

    /**
     * Sets price_discount
     *
     * @param \Ebay\Model\Buy\Order\Amount|null $price_discount price_discount
     *
     * @return self
     */
    public function setPriceDiscount($price_discount)
    {
        $this->container['price_discount'] = $price_discount;

        return $this;
    }

    /**
     * Gets price_subtotal
     *
     * @return \Ebay\Model\Buy\Order\Amount|null
     */
    public function getPriceSubtotal()
    {
        return $this->container['price_subtotal'];
    }

    /**
     * Sets price_subtotal
     *
     * @param \Ebay\Model\Buy\Order\Amount|null $price_subtotal price_subtotal
     *
     * @return self
     */
    public function setPriceSubtotal($price_subtotal)
    {
        $this->container['price_subtotal'] = $price_subtotal;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \Ebay\Model\Buy\Order\Amount|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \Ebay\Model\Buy\Order\Amount|null $tax tax
     *
     * @return self
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets total
     *
     * @return \Ebay\Model\Buy\Order\Amount|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param \Ebay\Model\Buy\Order\Amount|null $total total
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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


