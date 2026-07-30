<?php

namespace PrestaShopBundle\Form\Admin\Sell\Order\Invoices;

/**
 * Class is responsible of managing the data manipulated using invoice options form
 * in "Sell > Orders > Invoices" page.
 */
final class InvoiceOptionsDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    /**
     * @param DataConfigurationInterface $invoiceOptionsConfiguration
     * @param int $nextInvoiceNumber next available invoice number
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface $invoiceOptionsConfiguration, $nextInvoiceNumber)
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
