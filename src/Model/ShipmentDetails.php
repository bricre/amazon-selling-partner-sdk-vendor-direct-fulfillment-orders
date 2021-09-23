<?php

namespace Amz\VendorDirectFulfillmentOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Shipment details required for the shipment.
 */
class ShipmentDetails extends AbstractModel
{
    /**
     * When true, this is a priority shipment.
     *
     * @var bool
     */
    public $isPriorityShipment = null;

    /**
     * When true, this order is part of a scheduled delivery program.
     *
     * @var bool
     */
    public $isScheduledDeliveryShipment = null;

    /**
     * When true, a packing slip is required to be sent to the customer.
     *
     * @var bool
     */
    public $isPslipRequired = null;

    /**
     * When true, the order contain a gift. Include the gift message and gift wrap
     * information.
     *
     * @var bool
     */
    public $isGift = null;

    /**
     * Ship method to be used for shipping the order. Amazon defines ship method codes
     * indicating the shipping carrier and shipment service level. To see the full list
     * of ship methods in use, including both the code and the friendly name, search
     * the 'Help' section on Vendor Central for 'ship methods'.
     *
     * @var string
     */
    public $shipMethod = null;

    /**
     * @var \Amz\VendorDirectFulfillmentOrders\Model\ShipmentDates
     */
    public $shipmentDates = null;

    /**
     * Message to customer for order status.
     *
     * @var string
     */
    public $messageToCustomer = null;
}
