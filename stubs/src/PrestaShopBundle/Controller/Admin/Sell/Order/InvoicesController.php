<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Order;

/**
 * Controller responsible of "Sell > Orders > Invoices" page.
 */
class InvoicesController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Show order preferences page.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response Template parameters
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.order.invoices.by_date.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $byDateForm,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.order.invoices.by_status.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $byStatusForm,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.order.invoices.options.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $optionsForm
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Action that generates invoices PDF by date interval.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function generatePdfByDateAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.order.invoices.by_date.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler
    )
    {
    }
    /**
     * Action that generates invoices PDF by order status.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function generatePdfByStatusAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.order.invoices.by_status.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler
    )
    {
    }
    /**
     * Process the Invoice Options configuration form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'Access denied.', redirectRoute: 'admin_order_invoices')]
    public function processAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.order.invoices.options.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler
    )
    {
    }
    /**
     * Generates PDF of given invoice ID.
     *
     * @param int $invoiceId
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function generatePdfByIdAction(
        int $invoiceId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.pdf.generator.single_invoice')]
        \PrestaShop\PrestaShop\Adapter\PDF\InvoicePdfGenerator $invoicePdfGenerator
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
}
