<?php

namespace Amz\VendorDirectFulfillmentOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Details of an order.
 */
class OrderDetails extends AbstractModel
{
    /**
     * The customer order number.
     *
     * @var string
     */
    public $customerOrderNumber = null;

    /**
     * The date the order was placed. This field is expected to be in ISO-8601
     * date/time format, for example:2018-07-16T23:00:00Z/ 2018-07-16T23:00:00-05:00
     * /2018-07-16T23:00:00-08:00. If no time zone is specified, UTC should be assumed.
     *
     * @var string
     */
    public $orderDate = null;

    /**
     * Current status of the order.
     *
     * @var string
     */
    public $orderStatus = null;

    /**
     * @var \Amz\VendorDirectFulfillmentOrders\Model\ShipmentDetails
     */
    public $shipmentDetails = null;

    /**
     * @var object
     */
    public $taxTotal = null;

    /**
     * PartyID of vendor code.
     *
     * @var \Amz\VendorDirectFulfillmentOrders\Model\PartyIdentification
     */
    public $sellingParty = null;

    /**
     * PartyID of vendor's warehouse.
     *
     * @var \Amz\VendorDirectFulfillmentOrders\Model\PartyIdentification
     */
    public $shipFromParty = null;

    /**
     * Name/Address and tax details of the ship to party.
     *
     * @var \Amz\VendorDirectFulfillmentOrders\Model\Address
     */
    public $shipToParty = null;

    /**
     * Name/Address and tax details of the bill to party.
     *
     * @var \Amz\VendorDirectFulfillmentOrders\Model\PartyIdentification
     */
    public $billToParty = null;

    /**
     * A list of items in this purchase order.
     *
     * @var \Amz\VendorDirectFulfillmentOrders\Model\OrderItem[]
     */
    public $items = null;
}
