<?php

namespace Amz\VendorDirectFulfillmentOrders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class Pagination extends AbstractModel
{
    /**
     * A generated string used to pass information to your next request. If NextToken
     * is returned, pass the value of NextToken to the next request. If NextToken is
     * not returned, there are no more order items to return.
     *
     * @var string
     */
    public $nextToken = null;
}
