<?php

namespace Amz\VendorDirectFulfillmentOrders\Api;

use Amz\VendorDirectFulfillmentOrders\Model\GetOrderResponse as GetOrderResponse;
use Amz\VendorDirectFulfillmentOrders\Model\GetOrdersResponse as GetOrdersResponse;
use Amz\VendorDirectFulfillmentOrders\Model\SubmitAcknowledgementRequest as SubmitAcknowledgementRequest;
use Amz\VendorDirectFulfillmentOrders\Model\SubmitAcknowledgementResponse as SubmitAcknowledgementResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class VendorOrders extends AbstractAPI
{
    /**
     * Returns a list of purchase orders created during the time frame that you
     * specify. You define the time frame using the createdAfter and createdBefore
     * parameters. You must use both parameters. You can choose to get only the
     * purchase order numbers by setting the includeDetails parameter to false. In that
     * case, the operation returns a list of purchase order numbers. You can then call
     * the getOrder operation to return the details of a specific order.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param array $queries options:
     *                       'shipFromPartyId'		The vendor warehouse identifier for the fulfillment
     *                       warehouse. If not specified, the result will contain orders for all warehouses.
     *                       'limit'		The limit to the number of purchase orders returned.
     *                       'createdAfter'		Purchase orders that became available after this date and time
     *                       will be included in the result. Must be in ISO-8601 date/time format.
     *                       'createdBefore'		Purchase orders that became available before this date and time
     *                       will be included in the result. Must be in ISO-8601 date/time format.
     *                       'nextToken'		Used for pagination when there are more orders than the specified
     *                       result size limit. The token value is returned in the previous API call.
     *                       'includeDetails'		When true, returns the complete purchase order details.
     *                       Otherwise, only purchase order numbers are returned.
     *
     * @return GetOrdersResponse
     */
    public function getOrders(array $queries = []): GetOrdersResponse
    {
        return $this->client->request('getOrders', 'GET', 'vendor/directFulfillment/orders/v1/purchaseOrders',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns purchase order information for the purchaseOrderNumber that you specify.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $purchaseOrderNumber The order identifier for the purchase order that you
     * want. Formatting Notes: alpha-numeric code.
     *
     * @return GetOrderResponse
     */
    public function getOrder($purchaseOrderNumber): GetOrderResponse
    {
        return $this->client->request('getOrder', 'GET', "vendor/directFulfillment/orders/v1/purchaseOrders/{$purchaseOrderNumber}",
            [
            ]
        );
    }

    /**
     * Submits acknowledgements for one or more purchase orders.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param SubmitAcknowledgementRequest $Model Submits acknowledgements for one or
     *                                            more purchase orders.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @return SubmitAcknowledgementResponse
     */
    public function submitAcknowledgement(SubmitAcknowledgementRequest $Model): SubmitAcknowledgementResponse
    {
        return $this->client->request('submitAcknowledgement', 'POST', 'vendor/directFulfillment/orders/v1/acknowledgements',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }
}
