<?php

namespace Amz\VendorDirectFulfillmentOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class TaxDetails extends AbstractModel
{
    /**
     * @var \Amz\VendorDirectFulfillmentOrders\Model\Decimal
     */
    public $taxRate = null;

    /**
     * @var \Amz\VendorDirectFulfillmentOrders\Model\Money
     */
    public $taxAmount = null;

    /**
     * @var \Amz\VendorDirectFulfillmentOrders\Model\Money
     */
    public $taxableAmount = null;

    /**
     * Tax type.
     *
     * @var string
     */
    public $type = null;
}
