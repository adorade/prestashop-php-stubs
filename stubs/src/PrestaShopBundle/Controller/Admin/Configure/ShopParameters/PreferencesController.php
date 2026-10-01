<?php

namespace PrestaShopBundle\Controller\Admin\Configure\ShopParameters;

/**
 * Responsible for "Configure > Shop Parameters > General" page.
 */
class PreferencesController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    public const CONTROLLER_NAME = 'AdminPreferences';
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.preferences.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $preferencesFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_preferences')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_preferences')]
    public function processFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.preferences.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $preferencesFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
}
