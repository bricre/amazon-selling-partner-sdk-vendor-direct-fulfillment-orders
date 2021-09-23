<?php

namespace Amz\VendorDirectFulfillmentOrders;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'getItemEligibilityPreview' => [
            '200.' => 'Amz\\FbaInboundEligibility\\Model\\GetItemEligibilityPreviewResponse',
            '400.' => 'Amz\\FbaInboundEligibility\\Model\\GetItemEligibilityPreviewResponse',
            '401.' => 'Amz\\FbaInboundEligibility\\Model\\GetItemEligibilityPreviewResponse',
            '403.' => 'Amz\\FbaInboundEligibility\\Model\\GetItemEligibilityPreviewResponse',
            '404.' => 'Amz\\FbaInboundEligibility\\Model\\GetItemEligibilityPreviewResponse',
            '429.' => 'Amz\\FbaInboundEligibility\\Model\\GetItemEligibilityPreviewResponse',
            '500.' => 'Amz\\FbaInboundEligibility\\Model\\GetItemEligibilityPreviewResponse',
            '503.' => 'Amz\\FbaInboundEligibility\\Model\\GetItemEligibilityPreviewResponse',
        ],
        'listFinancialEventGroups' => [
            '200.' => 'Amz\\Finances\\Model\\ListFinancialEventGroupsResponse',
            '400.' => 'Amz\\Finances\\Model\\ListFinancialEventGroupsResponse',
            '403.' => 'Amz\\Finances\\Model\\ListFinancialEventGroupsResponse',
            '404.' => 'Amz\\Finances\\Model\\ListFinancialEventGroupsResponse',
            '429.' => 'Amz\\Finances\\Model\\ListFinancialEventGroupsResponse',
            '500.' => 'Amz\\Finances\\Model\\ListFinancialEventGroupsResponse',
            '503.' => 'Amz\\Finances\\Model\\ListFinancialEventGroupsResponse',
        ],
        'listFinancialEventsByGroupId' => [
            '200.' => 'Amz\\Finances\\Model\\ListFinancialEventsResponse',
            '400.' => 'Amz\\Finances\\Model\\ListFinancialEventsResponse',
            '403.' => 'Amz\\Finances\\Model\\ListFinancialEventsResponse',
            '404.' => 'Amz\\Finances\\Model\\ListFinancialEventsResponse',
            '429.' => 'Amz\\Finances\\Model\\ListFinancialEventsResponse',
            '500.' => 'Amz\\Finances\\Model\\ListFinancialEventsResponse',
            '503.' => 'Amz\\Finances\\Model\\ListFinancialEventsResponse',
        ],
        'listFinancialEventsByOrderId' => [
            '200.' => 'Amz\\Finances\\Model\\ListFinancialEventsResponse',
            '400.' => 'Amz\\Finances\\Model\\ListFinancialEventsResponse',
            '403.' => 'Amz\\Finances\\Model\\ListFinancialEventsResponse',
            '404.' => 'Amz\\Finances\\Model\\ListFinancialEventsResponse',
            '429.' => 'Amz\\Finances\\Model\\ListFinancialEventsResponse',
            '500.' => 'Amz\\Finances\\Model\\ListFinancialEventsResponse',
            '503.' => 'Amz\\Finances\\Model\\ListFinancialEventsResponse',
        ],
        'listFinancialEvents' => [
            '200.' => 'Amz\\Finances\\Model\\ListFinancialEventsResponse',
            '400.' => 'Amz\\Finances\\Model\\ListFinancialEventsResponse',
            '403.' => 'Amz\\Finances\\Model\\ListFinancialEventsResponse',
            '404.' => 'Amz\\Finances\\Model\\ListFinancialEventsResponse',
            '429.' => 'Amz\\Finances\\Model\\ListFinancialEventsResponse',
            '500.' => 'Amz\\Finances\\Model\\ListFinancialEventsResponse',
            '503.' => 'Amz\\Finances\\Model\\ListFinancialEventsResponse',
        ],
        'getOrders' => [
            '200.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\GetOrdersResponse',
            '400.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\GetOrdersResponse',
            '403.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\GetOrdersResponse',
            '404.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\GetOrdersResponse',
            '415.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\GetOrdersResponse',
            '429.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\GetOrdersResponse',
            '500.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\GetOrdersResponse',
            '503.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\GetOrdersResponse',
        ],
        'getOrder' => [
            '200.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\GetOrderResponse',
            '400.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\GetOrderResponse',
            '401.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\GetOrderResponse',
            '403.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\GetOrderResponse',
            '404.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\GetOrderResponse',
            '415.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\GetOrderResponse',
            '429.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\GetOrderResponse',
            '500.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\GetOrderResponse',
            '503.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\GetOrderResponse',
        ],
        'submitAcknowledgement' => [
            '202.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\SubmitAcknowledgementResponse',
            '400.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\SubmitAcknowledgementResponse',
            '403.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\SubmitAcknowledgementResponse',
            '404.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\SubmitAcknowledgementResponse',
            '413.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\SubmitAcknowledgementResponse',
            '415.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\SubmitAcknowledgementResponse',
            '429.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\SubmitAcknowledgementResponse',
            '500.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\SubmitAcknowledgementResponse',
            '503.' => 'Amz\\VendorDirectFulfillmentOrders\\Model\\SubmitAcknowledgementResponse',
        ],
    ];
}
