<?php

namespace PrestaShop\PrestaShop\Adapter\Invoice;

/**
 * Class OrderInvoiceDataProvider provides OrderInvoice data using legacy code.
 */
final class OrderInvoiceDataProvider implements \PrestaShop\PrestaShop\Core\Order\OrderInvoiceDataProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function getByDateInterval(\DateTimeInterface $dateFrom, \DateTimeInterface $dateTo)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getByStatus($orderStateId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getNextInvoiceNumber()
    {
    }
}
