<?php

namespace Amz\VendorDirectFulfillmentOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the submitAcknowledgement operation.
 */
class SubmitAcknowledgementResponse extends AbstractModel
{
    /**
     * The payload for the submitAcknowledgement operation.
     *
     * @var \Amz\VendorDirectFulfillmentOrders\Model\TransactionId
     */
    public $payload = null;

    /**
     * @var \Amz\VendorDirectFulfillmentOrders\Model\ErrorList
     */
    public $errors = null;
}
