<?php

namespace Amz\VendorDirectFulfillmentOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class OrderItemAcknowledgement extends AbstractModel
{
    /**
     * Line item sequence number for the item.
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
     * The vendor selected product identification of the item. Should be the same as
     * was provided in the purchase order.
     *
     * @var string
     */
    public $vendorProductIdentifier = null;

    /**
     * Details of quantity acknowledged with the above acknowledgement code.
     *
     * @var \Amz\VendorDirectFulfillmentOrders\Model\ItemQuantity
     */
    public $acknowledgedQuantity = null;
}
