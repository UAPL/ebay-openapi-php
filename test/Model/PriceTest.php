<?php
/**
 * PriceTest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Ebay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Browse API
 *
 * <p>The Browse API has the following resources:</p>   <ul> <li><b> item_summary: </b> Lets shoppers search for specific items by keyword, GTIN, category, charity, product, or item aspects and refine the results by using filters, such as aspects, compatibility, and fields values.</li>  <li><b> search_by_image: </b><a href=\"https://developer.ebay.com/api-docs/static/versioning.html#experimental\" target=\"_blank\"><img src=\"/cms/img/docs/experimental-icon.svg\" class=\"legend-icon experimental-icon\" alt=\"Experimental Release\" title=\"Experimental Release\" />&nbsp;(Experimental)</a> Lets shoppers search for specific items by image. You can refine the results by using URI parameters and filters.</li>   <li><b> item: </b> <ul><li>Lets you retrieve the details of a specific item or all the items in an item group, which is an item with variations such as color and size and check if a product is compatible with the specified item, such as if a specific car is compatible with a specific part.</li> <li>Provides a bridge between the eBay legacy APIs, such as <b> Finding</b>, and the RESTful APIs, which use different formats for the item IDs.</li>  </ul> </li>  <li> <b> shopping_cart: </b> <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#experimental\" target=\"_blank\"><img src=\"/cms/img/docs/experimental-icon.svg\" class=\"legend-icon experimental-icon\" alt=\"Experimental Release\" title=\"Experimental Release\" />&nbsp;(Experimental)</a> <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"> <img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\" title=\"Limited Release\"  alt=\"Limited Release\" />(Limited Release)</a> Provides the ability for eBay members to see the contents of their eBay cart, and add, remove, and change the quantity of items in their eBay cart.&nbsp;&nbsp;<b> Note: </b> This resource is not available in the eBay API Explorer.</li></ul>       <p>The <b> item_summary</b>, <b> search_by_image</b>, and <b> item</b> resource calls require an <a href=\"/api-docs/static/oauth-client-credentials-grant.html\">Application access token</a>. The <b> shopping_cart</b> resource calls require a <a href=\"/api-docs/static/oauth-authorization-code-grant.html\">User access token</a>.</p>
 *
 * The version of the OpenAPI document: v1.10.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace Ebay\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * PriceTest Class Doc Comment
 *
 * @category    Class
 * @description The type that defines the fields for the monetary value and currency of the price of the item.
 * @package     Ebay
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class PriceTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "Price"
     */
    public function testPrice()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "converted_from_currency"
     */
    public function testPropertyConvertedFromCurrency()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "converted_from_value"
     */
    public function testPropertyConvertedFromValue()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "currency"
     */
    public function testPropertyCurrency()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "value"
     */
    public function testPropertyValue()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
