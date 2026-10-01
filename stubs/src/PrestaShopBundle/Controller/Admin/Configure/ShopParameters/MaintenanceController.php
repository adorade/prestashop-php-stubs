<?php

namespace PrestaShopBundle\Controller\Admin\Configure\ShopParameters;

/**
 * Responsible for "Configure > Shop Parameters > General > Maintenance" page.
 */
class MaintenanceController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    public const CONTROLLER_NAME = 'AdminMaintenance';
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.maintenance.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $maintenanceFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_maintenance')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.', redirectRoute: 'admin_maintenance')]
    public function processFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.maintenance.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $maintenanceFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}
