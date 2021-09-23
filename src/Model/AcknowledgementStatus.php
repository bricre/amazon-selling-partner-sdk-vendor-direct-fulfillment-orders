<?php

namespace Amz\VendorDirectFulfillmentOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Status of acknowledgement.
 */
class AcknowledgementStatus extends AbstractModel
{
    /**
     * Acknowledgement code is a unique two digit value which indicates the status of
     * the acknowledgement. For a list of acknowledgement codes that Amazon supports,
     * see the Vendor Direct Fulfillment APIs Use Case Guide.
     *
     * @var string
     */
    public $code = null;

    /**
     * Reason for the acknowledgement code.
     *
     * @var string
     */
    public $description = null;
}
