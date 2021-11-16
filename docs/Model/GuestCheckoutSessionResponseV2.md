# # GuestCheckoutSessionResponseV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**applied_coupons** | [**\Ebay\Ebay\Model\Buy\Order\Coupon[]**](Coupon.md) | A container that returns the information for the coupons that were applied in the guest checkout session. | [optional]
**checkout_session_id** | **string** | The eBay-assigned guest checkout session ID. This ID is created after a successful &lt;b&gt;initiateGuestCheckoutSession&lt;/b&gt; call. | [optional]
**line_items** | [**\Ebay\Ebay\Model\Buy\Order\LineItem[]**](LineItem.md) | An array of line items associated with the guest checkout session. | [optional]
**pricing_summary** | [**\Ebay\Ebay\Model\Buy\Order\PricingSummaryV2**](PricingSummaryV2.md) |  | [optional]
**shipping_address** | [**\Ebay\Ebay\Model\Buy\Order\ShippingAddress**](ShippingAddress.md) |  | [optional]
**warnings** | [**\Ebay\Ebay\Model\Buy\Order\Error[]**](Error.md) | An array of errors or warnings that were generated during the method processing. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
