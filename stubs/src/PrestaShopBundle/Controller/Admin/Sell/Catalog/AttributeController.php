<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog;

/**
 * Responsible for Sell > Catalog > Attributes & Features > Attributes > Attribute
 */
class AttributeController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Displays Attribute groups > attributes page
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))",
     *     redirectRoute="admin_attributes_index",
     *     redirectQueryParamsToKeep={"attributeGroupId"}
     * )
     *
     * @param Request $request
     * @param int|string $attributeGroupId
     * @param AttributeFilters $attributeFilters
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, $attributeGroupId, \PrestaShop\PrestaShop\Core\Search\Filters\AttributeFilters $attributeFilters)
    {
    }
    /**
     * Updates attributes positioning order
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_attributes_index",
     *     redirectQueryParamsToKeep={"attributeGroupId"}
     * )
     *
     * @param Request $request
     * @param int $attributeGroupId
     *
     * @return RedirectResponse
     */
    public function updatePositionAction(\Symfony\Component\HttpFoundation\Request $request, int $attributeGroupId)
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *     message="You do not have permission to create this."
     * )
     *
     * @param int $attributeGroupId
     *
     * @return RedirectResponse
     */
    public function createAction(int $attributeGroupId)
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this."
     * )
     *
     * @param int $attributeId
     * @param int $attributeGroupId
     *
     * @return RedirectResponse
     */
    public function editAction(int $attributeId, int $attributeGroupId)
    {
    }
    /**
     * Deletes attribute
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_attributes_index",
     *     redirectQueryParamsToKeep={"attributeGroupId"}
     * )
     *
     * @param int $attributeGroupId
     * @param int $attributeId
     *
     * @return RedirectResponse
     */
    public function deleteAction(int $attributeGroupId, int $attributeId)
    {
    }
    /**
     * Deletes multiple attributes by provided ids from request
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_attributes_index",
     *     redirectQueryParamsToKeep={"attributeGroupId"}
     * )
     *
     * @param int $attributeGroupId
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDeleteAction(int $attributeGroupId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
}
