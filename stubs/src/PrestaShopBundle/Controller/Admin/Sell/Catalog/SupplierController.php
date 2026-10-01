<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog;

/**
 * Class SupplierController is responsible for "Sell > Catalog > Brands & Suppliers > Suppliers" page.
 */
class SupplierController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Show suppliers listing.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\SupplierFilters $filters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.supplier')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $supplierGridFactory,
        \PrestaShop\PrestaShop\Core\Search\Filters\SupplierFilters $filters
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Displays supplier creation form and handles form submit which creates new supplier.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", redirectRoute: 'admin_suppliers_index', message: 'You do not have permission to add this.')]
    public function createAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.supplier_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.supplier_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Deletes supplier.
     *
     * @param int $supplierId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_suppliers_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_suppliers_index', message: 'You do not have permission to delete this.')]
    public function deleteAction($supplierId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Bulk deletion of suppliers.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_suppliers_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_suppliers_index', message: 'You do not have permission to delete this.')]
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Bulk disables supplier statuses.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_suppliers_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_suppliers_index', message: 'You do not have permission to edit this.')]
    public function bulkDisableAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Bulk enables supplier statuses.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_suppliers_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_suppliers_index', message: 'You do not have permission to edit this.')]
    public function bulkEnableAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Displays edit supplier form and submits form.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $supplierId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_suppliers_index', message: 'You do not have permission to edit this.')]
    public function editAction(
        \Symfony\Component\HttpFoundation\Request $request,
        int $supplierId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.supplier_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.supplier_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Toggles supplier active status.
     *
     * @param int $supplierId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_suppliers_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_suppliers_index', message: 'You do not have permission to edit this.')]
    public function toggleStatusAction(int $supplierId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Views supplier products information.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $supplierId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function viewAction(\Symfony\Component\HttpFoundation\Request $request, int $supplierId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Exports to csv visible suppliers list data.
     *
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\SupplierFilters $filters
     *
     * @return \PrestaShopBundle\Component\CsvResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function exportAction(
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.supplier')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $supplierGridFactory,
        \PrestaShop\PrestaShop\Core\Search\Filters\SupplierFilters $filters
    ): \PrestaShopBundle\Component\CsvResponse
    {
    }
    /**
     * Deletes supplier logo image.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $supplierId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.', redirectRoute: 'admin_suppliers_edit', redirectQueryParamsToKeep: ['supplierId'])]
    public function deleteLogoImageAction(\Symfony\Component\HttpFoundation\Request $request, int $supplierId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @return string|null
     */
    protected function getSettingsTipMessage()
    {
    }
}
