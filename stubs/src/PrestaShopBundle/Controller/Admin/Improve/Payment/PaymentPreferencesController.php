<?php

namespace PrestaShopBundle\Controller\Admin\Improve\Payment;

/**
 * Class PaymentPreferencesController is responsible for "Improve > Payment > Preferences" page.
 */
class PaymentPreferencesController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show payment preferences page.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller'))",
     *      message="Access denied."
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process payment modules preferences form.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     message="Access denied.",
     *     redirectRoute="admin_payment_preferences"
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function processFormAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}
