<?php

namespace PrestaShopBundle\Controller\Admin\Improve\Payment;

/**
 * Class PaymentPreferencesController is responsible for "Improve > Payment > Preferences" page.
 */
class PaymentPreferencesController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Show payment preferences page.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'Access denied.')]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.payment_preferences.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $paymentPreferencesFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.module.payment_module_provider')]
        \PrestaShop\PrestaShop\Core\Module\DataProvider\PaymentModuleListProviderInterface $paymentModulesListProvider
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Process payment modules preferences form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'Access denied.', redirectRoute: 'admin_payment_preferences')]
    public function processFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.payment_preferences.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $paymentPreferencesFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}
