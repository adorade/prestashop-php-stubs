<?php

namespace PrestaShopBundle\Controller\Admin\Improve\Payment;

/**
 * Class PaymentMethodsController is responsible for 'Improve > Payment > Payment Methods' page.
 */
class PaymentMethodsController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Show payment method modules.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Adapter\Presenter\Module\PaymentModulesPresenter $paymentMethodsPresenter): \Symfony\Component\HttpFoundation\Response
    {
    }
}
