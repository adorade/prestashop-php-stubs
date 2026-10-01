<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog;

/**
 * Manages "Sell > Catalog > Brands & Suppliers > Brands" page
 */
class ManufacturerController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Show manufacturers listing page.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.grid_factory.manufacturer')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $manufacturerGridFactory,
        \PrestaShop\PrestaShop\Core\Search\Filters\ManufacturerFilters $manufacturerFilters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.grid_factory.manufacturer_address')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $manufacturerAddressFactory,
        \PrestaShop\PrestaShop\Core\Search\Filters\ManufacturerAddressFilters $manufacturerAddressFilters
    )
    {
    }
    /**
     * Provides filters functionality
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function searchAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.definition.factory.manufacturer')]
        \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\GridDefinitionFactoryInterface $manufacturerGridDefinitionFactory,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.definition.factory.manufacturer_address')]
        \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\GridDefinitionFactoryInterface $manufacturerAddressGridDefinitionFactory,
        \PrestaShopBundle\Service\Grid\ResponseBuilder $responseBuilder
    )
    {
    }
    /**
     * Show & process manufacturer creation.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))")]
    public function createAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.manufacturer_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.manufacturer_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * View single manufacturer details
     *
     * @param int $manufacturerId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function viewAction(\Symfony\Component\HttpFoundation\Request $request, int $manufacturerId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Show & process manufacturer editing.
     *
     * @param int $manufacturerId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_manufacturers_index')]
    public function editAction(
        \Symfony\Component\HttpFoundation\Request $request,
        int $manufacturerId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.manufacturer_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $formBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.manufacturer_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $formHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Deletes manufacturer
     *
     * @param int|string $manufacturerId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_manufacturers_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_manufacturers_index')]
    public function deleteAction($manufacturerId)
    {
    }
    /**
     * Deletes manufacturers on bulk action
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_manufacturers_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_manufacturers_index')]
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Enables manufacturers on bulk action
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_manufacturers_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_manufacturers_index')]
    public function bulkEnableAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Disables manufacturers on bulk action
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_manufacturers_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_manufacturers_index')]
    public function bulkDisableAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Toggles manufacturer status
     *
     * @param int $manufacturerId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_manufacturers_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_manufacturers_index')]
    public function toggleStatusAction($manufacturerId)
    {
    }
    /**
     * Export filtered manufacturers.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_manufacturers_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_manufacturers_index')]
    public function exportAction(
        \PrestaShop\PrestaShop\Core\Search\Filters\ManufacturerFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.grid_factory.manufacturer')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $manufacturersGridFactory
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Deletes manufacturer logo image.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $manufacturerId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to edit this.', redirectQueryParamsToKeep: ['manufacturerId'], redirectRoute: 'admin_manufacturers_edit')]
    public function deleteLogoImageAction(\Symfony\Component\HttpFoundation\Request $request, int $manufacturerId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Deletes address
     *
     * @param int $addressId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_manufacturers_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_manufacturers_index')]
    public function deleteAddressAction(int $addressId)
    {
    }
    /**
     * Export filtered manufacturer addresses.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_manufacturers_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_manufacturers_index')]
    public function exportAddressAction(
        \PrestaShop\PrestaShop\Core\Search\Filters\ManufacturerAddressFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.grid_factory.manufacturer_address')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $addressesGridFactory
    )
    {
    }
    /**
     * Deletes adresses in bulk action
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_manufacturers_index')]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_manufacturers_index')]
    public function bulkDeleteAddressAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show & process address creation.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))")]
    public function createAddressAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.manufacturer_address_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $addressFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.manufacturer_address_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $addressFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Show & process address editing.
     *
     * @param int $addressId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_manufacturers_index')]
    public function editAddressAction(
        \Symfony\Component\HttpFoundation\Request $request,
        int $addressId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.manufacturer_address_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $addressFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.handler.manufacturer_address_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $addressFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
}
