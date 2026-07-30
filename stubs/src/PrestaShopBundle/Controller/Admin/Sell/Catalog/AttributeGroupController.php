<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog;

class AttributeGroupController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Displays Attribute groups page
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param AttributeGroupFilters $attributeGroupFilters
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\AttributeGroupFilters $attributeGroupFilters)
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *     message="You do not have permission to create this."
     * )
     *
     * @return RedirectResponse
     */
    public function createAction()
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this."
     * )
     *
     * @param int $attributeGroupId
     *
     * @return RedirectResponse
     */
    public function editAction(int $attributeGroupId)
    {
    }
    /**
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller'))",
     *     message="You do not have permission to export this."
     * )
     *
     * @param int $attributeGroupId
     *
     * @return RedirectResponse
     */
    public function exportAction(int $attributeGroupId)
    {
    }
    /**
     * Updates attribute groups positioning order
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_attribute_groups_index"
     * )
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function updatePositionAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Deletes attribute group
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_attribute_groups_index",
     * )
     *
     * @param int $attributeGroupId
     *
     * @return RedirectResponse
     */
    public function deleteAction($attributeGroupId)
    {
    }
    /**
     * Deletes multiple attribute groups by provided ids from request
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_attribute_groups_index",
     * )
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
}
