<?php

namespace Amz\VendorDirectFulfillmentOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class OrderItem extends AbstractModel
{
    /**
     * Numbering of the item on the purchase order. The first item will be 1, the
     * second 2, and so on.
     *
     * @var string
     */
    public $itemSequenceNumber = null;

    /**
     * Buyer's standard identification number (ASIN) of an item.
     *
     * @var string
     */
    public $buyerProductIdentifier = null;

    /**
     * The vendor selected product identification of the item.
     *
     * @var string
     */
    public $vendorProductIdentifier = null;

    /**
     * Title for the item.
     *
     * @var string
     */
    public $title = null;

    /**
     * Item quantity ordered.
     *
     * @var \Amz\VendorDirectFulfillmentOrders\Model\ItemQuantity
     */
    public $orderedQuantity = null;

    /**
     * Details for the scheduled delivery shipment.
     *
     * @var \Amz\VendorDirectFulfillmentOrders\Model\ScheduledDeliveryShipment
     */
    public $scheduledDeliveryShipment = null;

    /**
     * Gift message and wrapId details.
     *
     * @var \Amz\VendorDirectFulfillmentOrders\Model\GiftDetails
     */
    public $giftDetails = null;

    /**
     * Net price (before tax) to vendor with currency details.
     *
     * @var \Amz\VendorDirectFulfillmentOrders\Model\Money
     */
    public $netPrice = null;

    /**
     * Total tax details for the line item.
     *
     * @var object
     */
    public $taxDetails = null;

    /**
     * The price to Amazon each (cost).
     *
     * @var \Amz\VendorDirectFulfillmentOrders\Model\Money
     */
    public $totalPrice = null;
}
