<?php

namespace PrestaShopBundle\Controller\Admin\Configure\ShopParameters;

/**
 * Responsible for "Configure > Shop Parameters > Product Settings" page.
 */
class ProductPreferencesController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.product_preferences.general.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $generalFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.product_preferences.page.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $pageFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.product_preferences.pagination.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $paginationFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.product_preferences.stock.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $stockFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_product_preferences')]
    public function processGeneralFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.product_preferences.general.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $generalFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_product_preferences')]
    public function processPageFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.product_preferences.page.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $pageFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_product_preferences')]
    public function processPaginationFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.product_preferences.pagination.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $paginationFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_product_preferences')]
    public function processStockFormAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.admin.product_preferences.stock.form_handler')]
        \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $stockFormHandler
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    protected function processForm(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface $formHandler, string $hookName): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}
