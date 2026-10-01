<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog\Product;

/**
 * Admin controller for the Product pages using the Symfony architecture:
 * - product list (display, search)
 * - product form (creation, edition)
 * - ...
 *
 * Some component displayed in this form are based on ajax request which might implemented
 * in another Controller.
 *
 * This controller is a re-migration of the initial ProductController which was the first
 * one to be migrated but doesn't meet the standards of the recently migrated controller.
 * The retro-compatibility is dropped for the legacy Admin pages, the former hook are no longer
 * managed for backward compatibility, new hooks need to be used in the modules, migration process
 * is detailed in the devdoc. (@todo add devdoc link when ready?)
 */
class ProductController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository)
    {
    }
    /**
     * Shows products listing.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('read', request.get('_legacy_controller'))")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\ProductFilters $filters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\ProductFilters $filters): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Process Grid search, but we need to add the category filter which is handled independently.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('read', request.get('_legacy_controller'))")
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function searchGridAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Reset filters for the grid only (category is kept, it can be cleared via another dedicated action)
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('read', request.get('_legacy_controller'))")
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function resetGridSearchAction(): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Apply the category filter and redirect to list on first page.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('read', request.get('_legacy_controller'))")
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function gridCategoryFilterAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Shows products shop details.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('read', request.get('_legacy_controller'))")
     *
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\ProductFilters $filters
     * @param int $productId
     * @param int|null $shopGroupId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function productShopPreviewsAction(\PrestaShop\PrestaShop\Core\Search\Filters\ProductFilters $filters, int $productId, ?int $shopGroupId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity("is_granted('read', 'AdminProducts')")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function lightListAction(\PrestaShop\PrestaShop\Core\Search\Filters\ProductFilters $filters, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * The redirection URL is generation thanks to the ProductPreviewProvider however it can't be used in the grid
     * since the LinkRowAction expects a symfony route, so this action is merely used as a proxy for symfony routing
     * and redirects to the appropriate product preview url.
     *
     * @AdminSecurity("is_granted('read', 'AdminProducts')")
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function previewAction(int $productId, ?int $shopId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))", message="You do not have permission to create this.")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $productId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function selectProductShopsAction(\Symfony\Component\HttpFoundation\Request $request, int $productId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))", message="You do not have permission to create this.")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message="You do not have permission to update this.")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $productId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction(\Symfony\Component\HttpFoundation\Request $request, int $productId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message="You do not have permission to delete this.")
     *
     * @param int $productId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteFromAllShopsAction(int $productId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message="You do not have permission to delete this.")
     *
     * @param int $productId
     * @param int $shopId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteFromShopAction(int $productId, int $shopId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message="You do not have permission to delete this.")
     *
     * @param int $productId
     * @param int $shopGroupId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteFromShopGroupAction(int $productId, int $shopGroupId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message="You do not have permission to delete this.")
     *
     * @param int $shopId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function bulkDeleteFromShopAction(\Symfony\Component\HttpFoundation\Request $request, int $shopId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message="You do not have permission to delete this.")
     *
     * @param int $shopGroupId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function bulkDeleteFromShopGroupAction(\Symfony\Component\HttpFoundation\Request $request, int $shopGroupId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))", message="You do not have permission to create this.")
     *
     * @param int $productId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function duplicateAllShopsAction(int $productId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))", message="You do not have permission to create this.")
     *
     * @param int $productId
     * @param int $shopId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function duplicateShopAction(int $productId, int $shopId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))", message="You do not have permission to create this.")
     *
     * @param int $productId
     * @param int $shopGroupId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function duplicateShopGroupAction(int $productId, int $shopGroupId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Toggles product status
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_products_index")
     *
     * @param int $productId
     * @param int $shopId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function toggleStatusForShopAction(int $productId, int $shopId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Enable product status for all shops and redirect to product list.
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_products_index")
     *
     * @param int $productId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function enableForAllShopsAction(int $productId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Enable product status for shop group and redirect to product list.
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_products_index")
     *
     * @param int $productId
     * @param int $shopGroupId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function enableForShopGroupAction(int $productId, int $shopGroupId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Disable product status for shop group and redirect to product list.
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_products_index")
     *
     * @param int $productId
     * @param int $shopGroupId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function disableForShopGroupAction(int $productId, int $shopGroupId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Disable product status for all shops and redirect to product list.
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute="admin_products_index")
     *
     * @param int $productId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function disableForAllShopsAction(int $productId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Export filtered products
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\ProductFilters $filters
     *
     * @return \PrestaShopBundle\Component\CsvResponse
     */
    public function exportAction(\PrestaShop\PrestaShop\Core\Search\Filters\ProductFilters $filters)
    {
    }
    /**
     * Updates product position.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_products_index",
     *     redirectQueryParamsToKeep={"id_category"},
     *     message="You do not have permission to edit this."
     * )
     * @DemoRestricted(
     *     redirectRoute="admin_products_index",
     *     redirectQueryParamsToKeep={"id_category"}
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function updatePositionAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Delete products in bulk action.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_products_index",
     *     message="You do not have permission to delete this."
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function bulkDeleteFromAllShopsAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Enable products in bulk action.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_products_index",
     *     message="You do not have permission to edit this."
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function bulkEnableAllShopsAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Enable products in bulk action for a specific shop.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_products_index",
     *     message="You do not have permission to edit this."
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $shopId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function bulkEnableShopAction(\Symfony\Component\HttpFoundation\Request $request, int $shopId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Enable products in bulk action for a specific shop group.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_products_index",
     *     message="You do not have permission to edit this."
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $shopGroupId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function bulkEnableShopGroupAction(\Symfony\Component\HttpFoundation\Request $request, int $shopGroupId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Disable products in bulk action.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_products_index",
     *     message="You do not have permission to edit this."
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function bulkDisableAllShopsAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Disable products in bulk action for a specific shop.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_products_index",
     *     message="You do not have permission to edit this."
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $shopId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function bulkDisableShopAction(\Symfony\Component\HttpFoundation\Request $request, int $shopId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Disable products in bulk action for a specific shop group.
     *
     * @AdminSecurity(
     *     "is_granted('update', request.get('_legacy_controller'))",
     *     redirectRoute="admin_products_index",
     *     message="You do not have permission to edit this."
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $shopGroupId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function bulkDisableShopGroupAction(\Symfony\Component\HttpFoundation\Request $request, int $shopGroupId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Duplicate products in bulk action.
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *     redirectRoute="admin_products_index",
     *     message="You do not have permission to edit this."
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function bulkDuplicateAllShopsAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Duplicate products in bulk action for specific shop.
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *     redirectRoute="admin_products_index",
     *     message="You do not have permission to edit this."
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $shopId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function bulkDuplicateShopAction(\Symfony\Component\HttpFoundation\Request $request, int $shopId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Duplicate products in bulk action for specific shop group.
     *
     * @AdminSecurity(
     *     "is_granted('create', request.get('_legacy_controller'))",
     *     redirectRoute="admin_products_index",
     *     message="You do not have permission to edit this."
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $shopGroupId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function bulkDuplicateShopGroupAction(\Symfony\Component\HttpFoundation\Request $request, int $shopGroupId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message="You do not have permission to read this.")
     *
     * Download the content of the virtual product.
     *
     * @param int $virtualProductFileId
     *
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function downloadVirtualFileAction(int $virtualProductFileId): \Symfony\Component\HttpFoundation\BinaryFileResponse
    {
    }
    /**
     * @AdminSecurity("is_granted(['read'], request.get('_legacy_controller'))")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param string $languageCode
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function searchProductsForAssociationAction(\Symfony\Component\HttpFoundation\Request $request, string $languageCode): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @AdminSecurity("is_granted(['read'], request.get('_legacy_controller'))")
     *
     * @param int $productId
     * @param int $shopId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function quantityAction(int $productId, int $shopId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
}
