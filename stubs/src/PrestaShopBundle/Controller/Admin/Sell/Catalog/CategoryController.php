<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog;

/**
 * Class CategoryController is responsible for "Sell > Catalog > Categories" page.
 */
class CategoryController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Show categories listing.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('create', request.get('_legacy_controller')) || is_granted('delete', request.get('_legacy_controller'))",
     *     message="You do not have permission to list this."
     * )
     *
     * @param Request $request
     * @param CategoryFilters $filters
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\CategoryFilters $filters)
    {
    }
    /**
     * @deprecated since 1.7.8 and will be removed in next major. Use CommonController:searchGridAction instead
     *
     * Process Grid search.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function searchGridAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show "Add new" form and handle form submit.
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *     message="You do not have permission to create this.",
     *     redirectRoute="admin_categories_index"
     * )
     *
     * @param Request $request
     *
     * @return Response
     */
    public function createAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show "Add new root category" page & process adding.
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *     message="You do not have permission to create this.",
     *     redirectRoute="admin_categories_index"
     * )
     *
     * @param Request $request
     *
     * @return Response
     */
    public function createRootAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show & process category editing.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     message="You do not have permission to edit this.",
     *     redirectRoute="admin_categories_index"
     * )
     *
     * @param int $categoryId
     * @param Request $request
     *
     * @return Response
     */
    public function editAction($categoryId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show and process category editing.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     message="You do not have permission to edit this.",
     *     redirectRoute="admin_categories_index"
     * )
     *
     * @param int $categoryId
     * @param Request $request
     *
     * @return Response
     */
    public function editRootAction($categoryId, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Deletes category cover image.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     message="You do not have permission to edit this.",
     *     redirectRoute="admin_categories_edit",
     *     redirectQueryParamsToKeep={"categoryId"}
     * )
     *
     * @param Request $request
     * @param int $categoryId
     *
     * @return RedirectResponse
     */
    public function deleteCoverImageAction(\Symfony\Component\HttpFoundation\Request $request, $categoryId)
    {
    }
    /**
     * Delete given menu thumbnail for category.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     message="You do not have permission to edit this.",
     *     redirectRoute="admin_categories_edit",
     *     redirectQueryParamsToKeep={"categoryId"}
     * )
     *
     * @param Request $request
     * @param int $categoryId
     * @param int $menuThumbnailId
     *
     * @return RedirectResponse
     */
    public function deleteMenuThumbnailAction(\Symfony\Component\HttpFoundation\Request $request, $categoryId, $menuThumbnailId)
    {
    }
    /**
     * Toggle category status.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     message="You do not have permission to update this."
     * )
     *
     * @param int $categoryId
     *
     * @return JsonResponse
     */
    public function toggleStatusAction($categoryId)
    {
    }
    /**
     * Process bulk action for categories status enabling.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_categories_index",
     *     message="You do not have permission to update this."
     * )
     * @DemoRestricted(redirectRoute="admin_categories_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkEnableStatusAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process bulk action for categories status disabling.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_categories_index",
     *     message="You do not have permission to update this."
     * )
     * @DemoRestricted(redirectRoute="admin_categories_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDisableStatusAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Processes bulk categories deleting.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_categories_index",
     *     message="You do not have permission to delete this."
     * )
     * @DemoRestricted(redirectRoute="admin_categories_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Process single category deleting.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_categories_index",
     *     message="You do not have permission to delete this."
     * )
     * @DemoRestricted(redirectRoute="admin_categories_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function deleteAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Export filtered categories.
     *
     * @AdminSecurity(
     *     "is_granted('read', request.get('_legacy_controller')) && is_granted('update', request.get('_legacy_controller')) && is_granted('create', request.get('_legacy_controller')) && is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_categories_index",
     *     message="You do not have permission to view this."
     * )
     * @DemoRestricted(redirectRoute="admin_categories_index")
     *
     * @param CategoryFilters $filters
     *
     * @return Response
     */
    public function exportAction(\PrestaShop\PrestaShop\Core\Search\Filters\CategoryFilters $filters)
    {
    }
    /**
     * Updates category position
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_categories_index",
     * )
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function updatePositionAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller')) || is_granted('create', 'AdminProducts')")
     *
     * Get Categories formatted like ajax_product_file.php.
     *
     * @param int $limit
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function getAjaxCategoriesAction($limit, \Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller')) || is_granted('create', 'AdminProducts')")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function getCategoriesTreeAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
}
