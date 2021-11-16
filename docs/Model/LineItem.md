# # LineItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authenticity_verification** | [**\Ebay\Ebay\Model\Buy\Order\AuthenticityVerificationProgram**](AuthenticityVerificationProgram.md) |  | [optional]
**base_unit_price** | [**\Ebay\Ebay\Model\Buy\Order\Amount**](Amount.md) |  | [optional]
**fees** | [**\Ebay\Ebay\Model\Buy\Order\Fee[]**](Fee.md) | A breakdown of the fees applicable to the line item. | [optional]
**image** | [**\Ebay\Ebay\Model\Buy\Order\Image**](Image.md) |  | [optional]
**item_id** | **string** | The eBay identifier of an item. This ID is returned by the &lt;b&gt;Browse&lt;/b&gt; and &lt;b&gt;Feed&lt;/b&gt; API methods. The ID is in RESTful item ID format.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;For example:&lt;/b&gt; &lt;code&gt;v1|2**********6|5**********4&lt;/code&gt; or &lt;code&gt;v1|1**********9|0&lt;/code&gt;.&lt;br /&gt;&lt;br /&gt;For more information about item IDs for RESTful APIs, see &lt;a href&#x3D;\&quot;/api-docs/buy/static/api-browse.html#Legacy\&quot;&gt;Legacy API compatibility&lt;/a&gt;. | [optional]
**line_item_id** | **string** | A unique eBay-assigned ID value that identifies a line item in a checkout session. | [optional]
**net_price** | [**\Ebay\Ebay\Model\Buy\Order\Amount**](Amount.md) |  | [optional]
**promotions** | [**\Ebay\Ebay\Model\Buy\Order\Promotion[]**](Promotion.md) | An array of promotions applied to the line item. | [optional]
**quantity** | **int** | The quantity ordered for the line item. | [optional]
**seller** | [**\Ebay\Ebay\Model\Buy\Order\Seller**](Seller.md) |  | [optional]
**shipping_options** | [**\Ebay\Ebay\Model\Buy\Order\ShippingOption[]**](ShippingOption.md) | An array of shipping options that are available for the line item. By default, the first one will be selected.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; The &lt;b&gt;updateGuestShippingOption&lt;/b&gt; method can be used to change the shipping option.&lt;/span&gt; | [optional]
**tax_details** | [**\Ebay\Ebay\Model\Buy\Order\TaxDetail[]**](TaxDetail.md) | A container that returns the tax information for the line item. | [optional]
**title** | **string** | The seller-created title of the item. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
