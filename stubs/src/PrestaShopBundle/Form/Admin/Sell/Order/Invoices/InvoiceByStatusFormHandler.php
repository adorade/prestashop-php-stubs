<?php

namespace PrestaShopBundle\Form\Admin\Sell\Order\Invoices;

/**
 * Class InvoiceByStatusFormHandler manages the data manipulated using "By status" form
 * in "Sell > Orders > Invoices" page.
 */
final class InvoiceByStatusFormHandler extends \PrestaShop\PrestaShop\Core\Form\Handler
{
    /**
     * @param \Symfony\Component\Form\FormFactoryInterface $formFactory
     * @param \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher
     * @param \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface $formDataProvider
     * @param string $form
     * @param string $hookName
     * @param \PrestaShop\PrestaShop\Core\Order\OrderInvoiceDataProviderInterface $orderInvoiceDataProvider
     * @param \PrestaShop\PrestaShop\Core\PDF\PDFGeneratorInterface $pdfGenerator
     */
    public function __construct(\Symfony\Component\Form\FormFactoryInterface $formFactory, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface $formDataProvider, $form, $hookName, \PrestaShop\PrestaShop\Core\Order\OrderInvoiceDataProviderInterface $orderInvoiceDataProvider, \PrestaShop\PrestaShop\Core\PDF\PDFGeneratorInterface $pdfGenerator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function save(array $data)
    {
    }
}
