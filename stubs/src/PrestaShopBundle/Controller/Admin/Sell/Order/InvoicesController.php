<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Order;

/**
 * Controller responsible of "Sell > Orders > Invoices" page.
 */
class InvoicesController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show order preferences page.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @Template("@PrestaShop/Admin/Sell/Order/Invoices/invoices.html.twig")
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message="Access denied.")
     *
     * @return array Template parameters
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Action that generates invoices PDF by date interval.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message="Access denied.")
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function generatePdfByDateAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Action that generates invoices PDF by order status.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message="Access denied.")
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function generatePdfByStatusAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process the Invoice Options configuration form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message="Access denied.")
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function processAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Generates PDF of given invoice ID.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message="Access denied.")
     *
     * @param int $invoiceId
     */
    public function generatePdfByIdAction(int $invoiceId)
    {
    }
}
