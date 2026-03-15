<?php

namespace PrestaShopBundle\Form\Admin\Sell\Order\Invoices;

/**
 * Class InvoiceByDateFormHandler manages the data manipulated using "By date" form
 * in "Sell > Orders > Invoices" page.
 */
final class InvoiceByDateFormHandler extends \PrestaShop\PrestaShop\Core\Form\Handler
{
    /**
     * @param FormFactoryInterface $formFactory
     * @param HookDispatcherInterface $hookDispatcher
     * @param FormDataProviderInterface $formDataProvider
     * @param string $form
     * @param string $hookName
     * @param OrderInvoiceDataProviderInterface $orderInvoiceDataProvider
     * @param PDFGeneratorInterface $pdfGenerator
     */
    public function __construct(\Symfony\Component\Form\FormFactoryInterface $formFactory, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface $formDataProvider, string $form, $hookName, \PrestaShop\PrestaShop\Core\Order\OrderInvoiceDataProviderInterface $orderInvoiceDataProvider, \PrestaShop\PrestaShop\Core\PDF\PDFGeneratorInterface $pdfGenerator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function save(array $data)
    {
    }
}
