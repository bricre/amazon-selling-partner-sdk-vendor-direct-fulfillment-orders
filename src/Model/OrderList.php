<?php

namespace Amz\VendorDirectFulfillmentOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class OrderList extends AbstractModel
{
    /**
     * @var \Amz\VendorDirectFulfillmentOrders\Model\Pagination
     */
    public $pagination = null;

    /**
     * @var \Amz\VendorDirectFulfillmentOrders\Model\Order[]
     */
    public $orders = null;
}
