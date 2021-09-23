<?php

namespace Amz\VendorDirectFulfillmentOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Dates for the scheduled delivery shipments.
 */
class ScheduledDeliveryShipment extends AbstractModel
{
    /**
     * Scheduled delivery service type.
     *
     * @var string
     */
    public $scheduledDeliveryServiceType = null;

    /**
     * Earliest nominated delivery date for the scheduled delivery.
     *
     * @var string
     */
    public $earliestNominatedDeliveryDate = null;

    /**
     * Latest nominated delivery date for the scheduled delivery.
     *
     * @var string
     */
    public $latestNominatedDeliveryDate = null;
}
