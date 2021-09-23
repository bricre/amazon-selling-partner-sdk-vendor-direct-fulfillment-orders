<?php

namespace Amz\VendorDirectFulfillmentOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request schema for the submitAcknowledgement operation.
 */
class SubmitAcknowledgementRequest extends AbstractModel
{
    /**
     * A list of one or more purchase orders.
     *
     * @var \Amz\VendorDirectFulfillmentOrders\Model\OrderAcknowledgementItem[]
     */
    public $orderAcknowledgements = null;
}
