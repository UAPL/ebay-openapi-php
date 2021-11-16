# # GuestPurchaseOrderV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line_items** | [**\Ebay\Model\Buy\Order\OrderLineItemV2[]**](OrderLineItemV2.md) | An array of line items in the order. | [optional]
**pricing_summary** | [**\Ebay\Model\Buy\Order\PricingSummary**](PricingSummary.md) |  | [optional]
**purchase_order_creation_date** | **string** | The creation date of the purchase order. | [optional]
**purchase_order_id** | **string** | The unique identifier of the purchase order. | [optional]
**purchase_order_payment_status** | **string** | A container that returns the payment status for the purchase order. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/order/types/gct:PurchaseOrderPaymentStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**purchase_order_status** | **string** | An enumeration value that indicates the current status of the buyer&#39;s payment and any refund that applies to the purchase order. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/order/types/gct:PurchaseOrderStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**refunded_amount** | [**\Ebay\Model\Buy\Order\Amount**](Amount.md) |  | [optional]
**warnings** | [**\Ebay\Model\Buy\Order\Error[]**](Error.md) | A container for any warning messages. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
