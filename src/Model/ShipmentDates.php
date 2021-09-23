<?php

namespace Amz\VendorDirectFulfillmentOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Shipment dates.
 */
class ShipmentDates extends AbstractModel
{
    /**
     * Time by which the vendor is required to ship the order.
     *
     * @var string
     */
    public $requiredShipDate = null;

    /**
     * Delivery date promised to the Amazon customer.
     *
     * @var string
     */
    public $promisedDeliveryDate = null;
}
