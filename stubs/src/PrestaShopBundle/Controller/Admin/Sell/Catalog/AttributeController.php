<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog;

/**
 * Responsible for Sell > Catalog > Attributes & Features > Attributes > Attribute
 */
class AttributeController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Displays Attribute groups > attributes page
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int|string $attributeGroupId
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\AttributeFilters $attributeFilters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_attributes_index', redirectQueryParamsToKeep: ['attributeGroupId'])]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        $attributeGroupId,
        \PrestaShop\PrestaShop\Core\Search\Filters\AttributeFilters $attributeFilters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.attribute')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $attributeGridFactory,
        \PrestaShop\PrestaShop\Adapter\AttributeGroup\AttributeGroupViewDataProvider $attributeGroupViewDataProvider
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Updates attributes positioning order
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $attributeGroupId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_attributes_index', redirectQueryParamsToKeep: ['attributeGroupId'])]
    public function updatePositionAction(
        \Symfony\Component\HttpFoundation\Request $request,
        int $attributeGroupId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.attribute.position_definition')]
        \PrestaShop\PrestaShop\Core\Grid\Position\PositionDefinition $positionDefinition
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", message: 'You do not have permission to create this.')]
    public function createAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.attribute_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $attributeFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.attribute_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $attributeFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to update this.')]
    public function editAction(
        \Symfony\Component\HttpFoundation\Request $request,
        int $attributeId,
        int $attributeGroupId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.attribute_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $attributeFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.attribute_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $attributeFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Deletes attribute
     *
     * @param int $attributeGroupId
     * @param int $attributeId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_attributes_index', redirectQueryParamsToKeep: ['attributeGroupId'])]
    public function deleteAction(int $attributeGroupId, int $attributeId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Deletes multiple attributes by provided ids from request
     *
     * @param int $attributeGroupId
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_attributes_index', redirectQueryParamsToKeep: ['attributeGroupId'])]
    public function bulkDeleteAction(int $attributeGroupId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\AttributeFilters $filters
     *
     * @return \PrestaShopBundle\Component\CsvResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'You do not have permission to export this.')]
    public function exportAction(
        \PrestaShop\PrestaShop\Core\Search\Filters\AttributeFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.attribute')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $attributeGridFactory
    ): \PrestaShopBundle\Component\CsvResponse
    {
    }
}
