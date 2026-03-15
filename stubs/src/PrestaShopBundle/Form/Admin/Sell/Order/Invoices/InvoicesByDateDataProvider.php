<?php

namespace PrestaShopBundle\Form\Admin\Sell\Order\Invoices;

/**
 * Class is responsible of managing the data manipulated using invoice generation by date form
 * in "Sell > Orders > Invoices" page.
 */
final class InvoicesByDateDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Order\OrderInvoiceDataProviderInterface $orderInvoiceDataProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setData(array $data)
    {
    }
}
