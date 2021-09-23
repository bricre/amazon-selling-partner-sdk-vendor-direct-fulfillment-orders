<?php

namespace Amz\VendorDirectFulfillmentOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class PartyIdentification extends AbstractModel
{
    /**
     * Assigned identification for the party. For example, warehouse code or vendor
     * code. Please refer to specific party for more details.
     *
     * @var string
     */
    public $partyId = null;

    /**
     * Address details of the party.
     *
     * @var \Amz\VendorDirectFulfillmentOrders\Model\Address
     */
    public $address = null;

    /**
     * Tax registration details of the entity.
     *
     * @var \Amz\VendorDirectFulfillmentOrders\Model\TaxRegistrationDetails
     */
    public $taxInfo = null;
}
