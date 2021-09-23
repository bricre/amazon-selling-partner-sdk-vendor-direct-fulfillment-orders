<?php

namespace Amz\VendorDirectFulfillmentOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class Order extends AbstractModel
{
    /**
     * The purchase order number for this order. Formatting Notes: alpha-numeric code.
     *
     * @var string
     */
    public $purchaseOrderNumber = null;

    /**
     * Purchase order details.
     *
     * @var \Amz\VendorDirectFulfillmentOrders\Model\OrderDetails
     */
    public $orderDetails = null;
}
