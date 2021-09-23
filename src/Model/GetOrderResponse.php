<?php

namespace Amz\VendorDirectFulfillmentOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getOrder operation.
 */
class GetOrderResponse extends AbstractModel
{
    /**
     * The payload for the getOrder operation.
     *
     * @var \Amz\VendorDirectFulfillmentOrders\Model\Order
     */
    public $payload = null;

    /**
     * @var \Amz\VendorDirectFulfillmentOrders\Model\ErrorList
     */
    public $errors = null;
}
