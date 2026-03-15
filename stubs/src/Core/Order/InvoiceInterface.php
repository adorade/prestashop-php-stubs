<?php

namespace PrestaShop\PrestaShop\Core\Order;

interface InvoiceInterface
{
    /**
     * Return collection of Invoice.
     *
     * @param string $dateFrom Date From
     * @param string $dateTo Date To
     *
     * @return array<OrderInvoice>
     */
    public static function getByDeliveryDateInterval($dateFrom, $dateTo);
}
