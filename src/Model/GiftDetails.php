<?php

namespace Amz\VendorDirectFulfillmentOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Gift details for the item.
 */
class GiftDetails extends AbstractModel
{
    /**
     * Gift message to be printed in shipment.
     *
     * @var string
     */
    public $giftMessage = null;

    /**
     * Gift wrap identifier for the gift wrapping, if any.
     *
     * @var string
     */
    public $giftWrapId = null;
}
