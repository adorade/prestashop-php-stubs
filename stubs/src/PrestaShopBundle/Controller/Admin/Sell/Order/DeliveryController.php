<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Order;

/**
 * Admin controller for the Order Delivery.
 */
class DeliveryController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Main page for Delivery slips.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('create', request.get('_legacy_controller')) || is_granted('delete', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function slipAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.order.delivery.slip.options.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.order.delivery.slip.pdf.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $pdfFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Delivery slips PDF generator.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('create', request.get('_legacy_controller')) || is_granted('delete', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function generatePdfAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.order.delivery.slip.pdf.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler,
        \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext
    )
    {
    }
}
