<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog;

class AttributeGroupController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    /**
     * Displays Attribute groups page
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\AttributeGroupFilters $attributeGroupFilters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        \PrestaShop\PrestaShop\Core\Search\Filters\AttributeGroupFilters $attributeGroupFilters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.attribute_group')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $attributeGroupGridFactory
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", message: 'You do not have permission to create this.')]
    public function createAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\AttributeGroupFormBuilder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $attributeGroupFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\AttributeGroupFormHandler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $attributeFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param int $attributeGroupId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to update this.')]
    public function editAction(
        \Symfony\Component\HttpFoundation\Request $request,
        int $attributeGroupId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\AttributeGroupFormBuilder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $attributeGroupFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\AttributeGroupFormHandler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $attributeFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\AttributeGroupFilters $filters
     *
     * @return \PrestaShopBundle\Component\CsvResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'You do not have permission to export this.')]
    public function exportAction(
        \PrestaShop\PrestaShop\Core\Search\Filters\AttributeGroupFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.attribute_group')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $attributeGroupGridFactory
    ): \PrestaShopBundle\Component\CsvResponse
    {
    }
    /**
     * Updates attribute groups positioning order
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_attribute_groups_index')]
    public function updatePositionAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.attribute_group.position_definition')]
        \PrestaShop\PrestaShop\Core\Grid\Position\PositionDefinition $positionDefinition
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Deletes attribute group
     *
     * @param int $attributeGroupId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_attribute_groups_index')]
    public function deleteAction($attributeGroupId)
    {
    }
    /**
     * Deletes attribute texture image.
     *
     * @param int $attributeGroupId
     * @param int $attributeId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to delete this.', redirectRoute: 'admin_attributes_edit', redirectQueryParamsToKeep: ['attributeGroupId', 'attributeId'])]
    public function deleteTextureImageAction($attributeGroupId, $attributeId)
    {
    }
    /**
     * Deletes multiple attribute groups by provided ids from request
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_attribute_groups_index')]
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}
