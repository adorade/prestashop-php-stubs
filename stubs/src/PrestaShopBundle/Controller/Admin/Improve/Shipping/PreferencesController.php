<?php

namespace PrestaShopBundle\Controller\Admin\Improve\Shipping;

/**
 * Controller responsible for "Improve > Shipping > Preferences" page.
 */
class PreferencesController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Show shipping preferences page.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.shipping_preferences.handling.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $handlingFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.shipping_preferences.carrier_options.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $carrierOptionsFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.', redirectRoute: 'admin_shipping_preferences')]
    public function processCarrierOptionsFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.shipping_preferences.handling.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $handlingFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.shipping_preferences.carrier_options.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $carrierOptionsFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.', redirectRoute: 'admin_shipping_preferences')]
    public function processHandlingFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.shipping_preferences.handling.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $handlingFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.shipping_preferences.carrier_options.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $carrierOptionsFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
}
