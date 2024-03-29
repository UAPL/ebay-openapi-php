<?php
/**
 * LineItem
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
 * LineItem Class Doc Comment
 *
 * @category Class
 * @description A type that defines the fields for an individual line item.
 * @package  Ebay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LineItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'authenticity_verification' => '\Ebay\Model\Buy\Order\AuthenticityVerificationProgram',
        'base_unit_price' => '\Ebay\Model\Buy\Order\Amount',
        'fees' => '\Ebay\Model\Buy\Order\Fee[]',
        'image' => '\Ebay\Model\Buy\Order\Image',
        'item_id' => 'string',
        'line_item_id' => 'string',
        'net_price' => '\Ebay\Model\Buy\Order\Amount',
        'promotions' => '\Ebay\Model\Buy\Order\Promotion[]',
        'quantity' => 'int',
        'seller' => '\Ebay\Model\Buy\Order\Seller',
        'shipping_options' => '\Ebay\Model\Buy\Order\ShippingOption[]',
        'tax_details' => '\Ebay\Model\Buy\Order\TaxDetail[]',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'authenticity_verification' => null,
        'base_unit_price' => null,
        'fees' => null,
        'image' => null,
        'item_id' => null,
        'line_item_id' => null,
        'net_price' => null,
        'promotions' => null,
        'quantity' => 'int32',
        'seller' => null,
        'shipping_options' => null,
        'tax_details' => null,
        'title' => null
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
        'authenticity_verification' => 'authenticityVerification',
        'base_unit_price' => 'baseUnitPrice',
        'fees' => 'fees',
        'image' => 'image',
        'item_id' => 'itemId',
        'line_item_id' => 'lineItemId',
        'net_price' => 'netPrice',
        'promotions' => 'promotions',
        'quantity' => 'quantity',
        'seller' => 'seller',
        'shipping_options' => 'shippingOptions',
        'tax_details' => 'taxDetails',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authenticity_verification' => 'setAuthenticityVerification',
        'base_unit_price' => 'setBaseUnitPrice',
        'fees' => 'setFees',
        'image' => 'setImage',
        'item_id' => 'setItemId',
        'line_item_id' => 'setLineItemId',
        'net_price' => 'setNetPrice',
        'promotions' => 'setPromotions',
        'quantity' => 'setQuantity',
        'seller' => 'setSeller',
        'shipping_options' => 'setShippingOptions',
        'tax_details' => 'setTaxDetails',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authenticity_verification' => 'getAuthenticityVerification',
        'base_unit_price' => 'getBaseUnitPrice',
        'fees' => 'getFees',
        'image' => 'getImage',
        'item_id' => 'getItemId',
        'line_item_id' => 'getLineItemId',
        'net_price' => 'getNetPrice',
        'promotions' => 'getPromotions',
        'quantity' => 'getQuantity',
        'seller' => 'getSeller',
        'shipping_options' => 'getShippingOptions',
        'tax_details' => 'getTaxDetails',
        'title' => 'getTitle'
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
        $this->container['authenticity_verification'] = $data['authenticity_verification'] ?? null;
        $this->container['base_unit_price'] = $data['base_unit_price'] ?? null;
        $this->container['fees'] = $data['fees'] ?? null;
        $this->container['image'] = $data['image'] ?? null;
        $this->container['item_id'] = $data['item_id'] ?? null;
        $this->container['line_item_id'] = $data['line_item_id'] ?? null;
        $this->container['net_price'] = $data['net_price'] ?? null;
        $this->container['promotions'] = $data['promotions'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['seller'] = $data['seller'] ?? null;
        $this->container['shipping_options'] = $data['shipping_options'] ?? null;
        $this->container['tax_details'] = $data['tax_details'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
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
     * Gets authenticity_verification
     *
     * @return \Ebay\Model\Buy\Order\AuthenticityVerificationProgram|null
     */
    public function getAuthenticityVerification()
    {
        return $this->container['authenticity_verification'];
    }

    /**
     * Sets authenticity_verification
     *
     * @param \Ebay\Model\Buy\Order\AuthenticityVerificationProgram|null $authenticity_verification authenticity_verification
     *
     * @return self
     */
    public function setAuthenticityVerification($authenticity_verification)
    {
        $this->container['authenticity_verification'] = $authenticity_verification;

        return $this;
    }

    /**
     * Gets base_unit_price
     *
     * @return \Ebay\Model\Buy\Order\Amount|null
     */
    public function getBaseUnitPrice()
    {
        return $this->container['base_unit_price'];
    }

    /**
     * Sets base_unit_price
     *
     * @param \Ebay\Model\Buy\Order\Amount|null $base_unit_price base_unit_price
     *
     * @return self
     */
    public function setBaseUnitPrice($base_unit_price)
    {
        $this->container['base_unit_price'] = $base_unit_price;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return \Ebay\Model\Buy\Order\Fee[]|null
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param \Ebay\Model\Buy\Order\Fee[]|null $fees A breakdown of the fees applicable to the line item.
     *
     * @return self
     */
    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \Ebay\Model\Buy\Order\Image|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \Ebay\Model\Buy\Order\Image|null $image image
     *
     * @return self
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return string|null
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string|null $item_id The eBay identifier of an item. This ID is returned by the <b>Browse</b> and <b>Feed</b> API methods. The ID is in RESTful item ID format.<br /><br /><b>For example:</b> <code>v1|2**********6|5**********4</code> or <code>v1|1**********9|0</code>.<br /><br />For more information about item IDs for RESTful APIs, see <a href=\"/api-docs/buy/static/api-browse.html#Legacy\">Legacy API compatibility</a>.
     *
     * @return self
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets line_item_id
     *
     * @return string|null
     */
    public function getLineItemId()
    {
        return $this->container['line_item_id'];
    }

    /**
     * Sets line_item_id
     *
     * @param string|null $line_item_id A unique eBay-assigned ID value that identifies a line item in a checkout session.
     *
     * @return self
     */
    public function setLineItemId($line_item_id)
    {
        $this->container['line_item_id'] = $line_item_id;

        return $this;
    }

    /**
     * Gets net_price
     *
     * @return \Ebay\Model\Buy\Order\Amount|null
     */
    public function getNetPrice()
    {
        return $this->container['net_price'];
    }

    /**
     * Sets net_price
     *
     * @param \Ebay\Model\Buy\Order\Amount|null $net_price net_price
     *
     * @return self
     */
    public function setNetPrice($net_price)
    {
        $this->container['net_price'] = $net_price;

        return $this;
    }

    /**
     * Gets promotions
     *
     * @return \Ebay\Model\Buy\Order\Promotion[]|null
     */
    public function getPromotions()
    {
        return $this->container['promotions'];
    }

    /**
     * Sets promotions
     *
     * @param \Ebay\Model\Buy\Order\Promotion[]|null $promotions An array of promotions applied to the line item.
     *
     * @return self
     */
    public function setPromotions($promotions)
    {
        $this->container['promotions'] = $promotions;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity The quantity ordered for the line item.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets seller
     *
     * @return \Ebay\Model\Buy\Order\Seller|null
     */
    public function getSeller()
    {
        return $this->container['seller'];
    }

    /**
     * Sets seller
     *
     * @param \Ebay\Model\Buy\Order\Seller|null $seller seller
     *
     * @return self
     */
    public function setSeller($seller)
    {
        $this->container['seller'] = $seller;

        return $this;
    }

    /**
     * Gets shipping_options
     *
     * @return \Ebay\Model\Buy\Order\ShippingOption[]|null
     */
    public function getShippingOptions()
    {
        return $this->container['shipping_options'];
    }

    /**
     * Sets shipping_options
     *
     * @param \Ebay\Model\Buy\Order\ShippingOption[]|null $shipping_options An array of shipping options that are available for the line item. By default, the first one will be selected.<br /><br /><span class=\"tablenote\"><b>Note:</b> The <b>updateGuestShippingOption</b> method can be used to change the shipping option.</span>
     *
     * @return self
     */
    public function setShippingOptions($shipping_options)
    {
        $this->container['shipping_options'] = $shipping_options;

        return $this;
    }

    /**
     * Gets tax_details
     *
     * @return \Ebay\Model\Buy\Order\TaxDetail[]|null
     */
    public function getTaxDetails()
    {
        return $this->container['tax_details'];
    }

    /**
     * Sets tax_details
     *
     * @param \Ebay\Model\Buy\Order\TaxDetail[]|null $tax_details A container that returns the tax information for the line item.
     *
     * @return self
     */
    public function setTaxDetails($tax_details)
    {
        $this->container['tax_details'] = $tax_details;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The seller-created title of the item.
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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


