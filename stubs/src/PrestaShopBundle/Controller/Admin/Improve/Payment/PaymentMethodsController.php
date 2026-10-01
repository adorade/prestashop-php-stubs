<?php

namespace PrestaShopBundle\Controller\Admin\Improve\Payment;

/**
 * Class PaymentMethodsController is responsible for 'Improve > Payment > Payment Methods' page.
 */
class PaymentMethodsController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show payment method modules.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}
