# # OrderLineItemV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authenticity_verification** | [**\Ebay\Model\Buy\Order\AuthenticityVerificationProgram**](AuthenticityVerificationProgram.md) |  | [optional]
**base_unit_price** | [**\Ebay\Model\Buy\Order\Amount**](Amount.md) |  | [optional]
**fees** | [**\Ebay\Model\Buy\Order\Fee[]**](Fee.md) | A breakdown of the fees applicable to the line item. | [optional]
**image** | [**\Ebay\Model\Buy\Order\Image**](Image.md) |  | [optional]
**item_id** | **string** | The eBay identifier of an item. This ID is returned by the &lt;b&gt;Browse&lt;/b&gt; and &lt;b&gt;Feed&lt;/b&gt; API methods. | [optional]
**legacy_reference** | [**\Ebay\Model\Buy\Order\LegacyReference**](LegacyReference.md) |  | [optional]
**line_item_id** | **string** | A unique eBay-assigned ID value that identifies a line item in a checkout session. This is created by the &lt;a href&#x3D;\&quot;/api-docs/buy/order/resources/guest_checkout_session/methods/initiateGuestCheckoutSession\&quot;&gt;initiateGuestCheckoutSession&lt;/a&gt;. | [optional]
**line_item_payment_status** | **string** | An enumeration value that indicates the payment status of the line item. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/order/types/gct:LineItemPaymentStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**line_item_status** | **string** | An enumeration value that indicates the fulfillment state of this line item.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; When there is no tracking information, the status will never change from &lt;code&gt;FULFILLMENT_IN_PROGRESS&lt;/code&gt;; without tracking information, eBay has no way of knowing whether the order was delivered.&lt;/span&gt; For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/order/types/gct:LineItemStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**net_price** | [**\Ebay\Model\Buy\Order\Amount**](Amount.md) |  | [optional]
**order_id** | **string** | The unique order ID for the line item.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum Length:&lt;/b&gt; 40 characters | [optional]
**promotions** | [**\Ebay\Model\Buy\Order\Promotion[]**](Promotion.md) | An array of promotions applied to the line item. | [optional]
**quantity** | **int** | The quantity ordered for the line item. | [optional]
**seller** | [**\Ebay\Model\Buy\Order\Seller**](Seller.md) |  | [optional]
**shipping_detail** | [**\Ebay\Model\Buy\Order\ShippingDetail**](ShippingDetail.md) |  | [optional]
**tax_details** | [**\Ebay\Model\Buy\Order\TaxDetail[]**](TaxDetail.md) | A container for the tax information for the line item. | [optional]
**title** | **string** | The seller-created title of the item. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
