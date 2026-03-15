<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Order;

/**
 * Admin controller for the Order Delivery.
 */
class DeliveryController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Main page for Delivery slips.
     *
     * @Template("@PrestaShop/Admin/Sell/Order/Delivery/slip.html.twig")
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('create', request.get('_legacy_controller')) || is_granted('delete', request.get('_legacy_controller'))",
     *     message="Access denied."
     * )
     *
     * @param Request $request
     *
     * @return array|RedirectResponse
     */
    public function slipAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Delivery slips PDF generator.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('create', request.get('_legacy_controller')) || is_granted('delete', request.get('_legacy_controller'))",
     *     message="Access denied."
     * )
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function generatePdfAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}
