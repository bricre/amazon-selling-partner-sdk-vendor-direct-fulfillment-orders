<?php

namespace Amz\VendorDirectFulfillmentOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Details of an individual order being acknowledged.
 */
class OrderAcknowledgementItem extends AbstractModel
{
    /**
     * The purchase order number for this order. Formatting Notes: alpha-numeric code.
     *
     * @var string
     */
    public $purchaseOrderNumber = null;

    /**
     * The vendor's order number for this order.
     *
     * @var string
     */
    public $vendorOrderNumber = null;

    /**
     * The date and time when the order is acknowledged, in ISO-8601 date/time format.
     * For example: 2018-07-16T23:00:00Z / 2018-07-16T23:00:00-05:00 /
     * 2018-07-16T23:00:00-08:00.
     *
     * @var string
     */
    public $acknowledgementDate = null;

    /**
     * Status of acknowledgement.
     *
     * @var \Amz\VendorDirectFulfillmentOrders\Model\AcknowledgementStatus
     */
    public $acknowledgementStatus = null;

    /**
     * PartyID as vendor code.
     *
     * @var \Amz\VendorDirectFulfillmentOrders\Model\PartyIdentification
     */
    public $sellingParty = null;

    /**
     * PartyID as the vendor's warehouseId.
     *
     * @var \Amz\VendorDirectFulfillmentOrders\Model\PartyIdentification
     */
    public $shipFromParty = null;

    /**
     * Item details including acknowledged quantity.
     *
     * @var \Amz\VendorDirectFulfillmentOrders\Model\OrderItemAcknowledgement[]
     */
    public $itemAcknowledgements = null;
}
