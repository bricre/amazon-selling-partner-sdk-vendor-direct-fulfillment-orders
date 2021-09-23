<?php

namespace Amz\VendorDirectFulfillmentOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getOrders operation.
 */
class GetOrdersResponse extends AbstractModel
{
    /**
     * A list of purchase orders.
     *
     * @var \Amz\VendorDirectFulfillmentOrders\Model\OrderList
     */
    public $payload = null;

    /**
     * @var \Amz\VendorDirectFulfillmentOrders\Model\ErrorList
     */
    public $errors = null;
}
