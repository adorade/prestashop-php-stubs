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
class ProductController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    use \PrestaShopBundle\Controller\BulkActionsTrait;
    public static function getSubscribedServices(): array
    {
    }
    /**
     * Shows products listing.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\ProductFilters $filters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.product')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $productGridFactory,
        \PrestaShop\PrestaShop\Core\Search\Filters\ProductFilters $filters
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * This action is only used to allow backward compatible use of the former route admin_product_catalog
     * It is added out of courtesy to give time for module to change and use the new admin_products_index route,
     * but it will be removed in version 10.0 and its only usable via GET method.
     *
     * @deprecated Will be removed in 10.0
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('read', request.get('_legacy_controller'))")]
    public function backwardCompatibleListAction(): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Process Grid search, but we need to add the category filter which is handled independently.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('read', request.get('_legacy_controller'))")]
    public function searchGridAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.definition.factory.product')]
        \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\GridDefinitionFactoryInterface $definitionFactory
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Reset filters for the grid only (category is kept, it can be cleared via another dedicated action)
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('read', request.get('_legacy_controller'))")]
    public function resetGridSearchAction(): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Apply the category filter and redirect to list on first page.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('read', request.get('_legacy_controller'))")]
    public function gridCategoryFilterAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Shows products shop details.
     *
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\ProductFilters $filters
     * @param int $productId
     * @param int|null $shopGroupId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('read', request.get('_legacy_controller'))")]
    public function productShopPreviewsAction(
        \PrestaShop\PrestaShop\Core\Search\Filters\ProductFilters $filters,
        int $productId,
        ?int $shopGroupId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.product.shops')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $gridFactory
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', 'AdminProducts')")]
    public function lightListAction(
        \PrestaShop\PrestaShop\Core\Search\Filters\ProductFilters $filters,
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.product_light')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $gridFactory
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * The redirection URL is generation thanks to the ProductPreviewProvider however it can't be used in the grid
     * since the LinkRowAction expects a symfony route, so this action is merely used as a proxy for symfony routing
     * and redirects to the appropriate product preview url.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', 'AdminProducts')")]
    public function previewAction(
        int $productId,
        ?int $shopId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.adapter.shop.url.product_preview_provider')]
        \PrestaShop\PrestaShop\Adapter\Shop\Url\ProductPreviewProvider $previewUrlProvider
    ): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $productId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", message: 'You do not have permission to create this.')]
    public function selectProductShopsAction(
        \Symfony\Component\HttpFoundation\Request $request,
        int $productId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.product_shops_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $productShopsFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.product_shops_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $productShopsFormHandler
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
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.create_product_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $productFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.product_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $productFormHandler
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $productId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to update this.', redirectRoute: 'admin_products_index')]
    public function editAction(
        \Symfony\Component\HttpFoundation\Request $request,
        int $productId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.edit_product_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $editProductFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.product_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $productFormHandler,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.category_tree_selector_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $categoryTreeFormBuilder
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * This action is only used to allow backward compatible use of the former route admin_product_form
     * It is added out of courtesy to give time for module to change and use the new admin_products_edit route,
     * but it will be removed in version 10.0 and its only usable via GET method.
     *
     * @deprecated Will be removed in 10.0
     *
     * @param int $id
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to update this.')]
    public function backwardCompatibleEditAction(int $id): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * @param int $productId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to delete this.')]
    public function deleteFromAllShopsAction(int $productId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param int $productId
     * @param int $shopId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to delete this.')]
    public function deleteFromShopAction(int $productId, int $shopId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param int $productId
     * @param int $shopGroupId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to delete this.')]
    public function deleteFromShopGroupAction(int $productId, int $shopGroupId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param int $shopId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to delete this.', jsonResponse: true)]
    public function bulkDeleteFromShopAction(\Symfony\Component\HttpFoundation\Request $request, int $shopId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param int $shopGroupId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to delete this.', jsonResponse: true)]
    public function bulkDeleteFromShopGroupAction(\Symfony\Component\HttpFoundation\Request $request, int $shopGroupId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param int $productId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", message: 'You do not have permission to create this.')]
    public function duplicateAllShopsAction(int $productId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param int $productId
     * @param int $shopId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", message: 'You do not have permission to create this.')]
    public function duplicateShopAction(int $productId, int $shopId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * @param int $productId
     * @param int $shopGroupId
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", message: 'You do not have permission to create this.')]
    public function duplicateShopGroupAction(int $productId, int $shopGroupId): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Toggles product status for specific shop
     *
     * @param int $productId
     * @param int $shopId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_products_index')]
    public function toggleStatusForShopAction(int $productId, int $shopId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Toggles product status for all shops
     *
     * @param int $productId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_products_index')]
    public function toggleStatusForAllShopsAction(int $productId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Enable product status for all shops and redirect to product list.
     *
     * @param int $productId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_products_index')]
    public function enableForAllShopsAction(int $productId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Disable product status for all shops and redirect to product list.
     *
     * @param int $productId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_products_index')]
    public function disableForAllShopsAction(int $productId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Enable product status for shop group and redirect to product list.
     *
     * @param int $productId
     * @param int $shopGroupId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_products_index')]
    public function enableForShopGroupAction(int $productId, int $shopGroupId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Disable product status for shop group and redirect to product list.
     *
     * @param int $productId
     * @param int $shopGroupId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_products_index')]
    public function disableForShopGroupAction(int $productId, int $shopGroupId): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Export filtered products
     *
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\ProductFilters $filters
     *
     * @return \PrestaShopBundle\Component\CsvResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", redirectRoute: 'admin_products_index')]
    public function exportAction(
        \PrestaShop\PrestaShop\Core\Search\Filters\ProductFilters $filters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.factory.product')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $productGridFactory
    ): \PrestaShopBundle\Component\CsvResponse
    {
    }
    /**
     * Updates product position.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\DemoRestricted(redirectRoute: 'admin_products_index', redirectQueryParamsToKeep: ['id_category'])]
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_products_index', redirectQueryParamsToKeep: ['id_category'], message: 'You do not have permission to edit this.')]
    public function updatePositionAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Delete products in bulk action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_products_index', message: 'You do not have permission to delete this.')]
    public function bulkDeleteFromAllShopsAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Enable products in bulk action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_products_index', message: 'You do not have permission to edit this.', jsonResponse: true)]
    public function bulkEnableAllShopsAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Enable products in bulk action for a specific shop.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $shopId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_products_index', message: 'You do not have permission to edit this.', jsonResponse: true)]
    public function bulkEnableShopAction(\Symfony\Component\HttpFoundation\Request $request, int $shopId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Enable products in bulk action for a specific shop group.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $shopGroupId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_products_index', message: 'You do not have permission to edit this.', jsonResponse: true)]
    public function bulkEnableShopGroupAction(\Symfony\Component\HttpFoundation\Request $request, int $shopGroupId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Disable products in bulk action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_products_index', message: 'You do not have permission to edit this.', jsonResponse: true)]
    public function bulkDisableAllShopsAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Disable products in bulk action for a specific shop.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $shopId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_products_index', message: 'You do not have permission to edit this.', jsonResponse: true)]
    public function bulkDisableShopAction(\Symfony\Component\HttpFoundation\Request $request, int $shopId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Disable products in bulk action for a specific shop group.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $shopGroupId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_products_index', message: 'You do not have permission to edit this.', jsonResponse: true)]
    public function bulkDisableShopGroupAction(\Symfony\Component\HttpFoundation\Request $request, int $shopGroupId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Duplicate products in bulk action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", redirectRoute: 'admin_products_index', message: 'You do not have permission to edit this.', jsonResponse: true)]
    public function bulkDuplicateAllShopsAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Duplicate products in bulk action for specific shop.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $shopId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", redirectRoute: 'admin_products_index', message: 'You do not have permission to edit this.', jsonResponse: true)]
    public function bulkDuplicateShopAction(\Symfony\Component\HttpFoundation\Request $request, int $shopId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Duplicate products in bulk action for specific shop group.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $shopGroupId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller'))", redirectRoute: 'admin_products_index', message: 'You do not have permission to edit this.', jsonResponse: true)]
    public function bulkDuplicateShopGroupAction(\Symfony\Component\HttpFoundation\Request $request, int $shopGroupId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Download the content of the virtual product.
     *
     * @param int $virtualProductFileId
     *
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'You do not have permission to read this.')]
    public function downloadVirtualFileAction(int $virtualProductFileId): \Symfony\Component\HttpFoundation\BinaryFileResponse
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param string $languageCode
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function searchProductsForAssociationAction(\Symfony\Component\HttpFoundation\Request $request, string $languageCode, \PrestaShop\PrestaShop\Core\Language\LanguageRepositoryInterface $langRepository): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param int $productId
     * @param int $shopId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function quantityAction(int $productId, int $shopId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Displays a category tree (legacy).
     *
     * This action is kept for backward compatibility with pages
     * that still rely on HelperTreeCategories.
     *
     * @todo Remove this method once all pages depending on
     *       HelperTreeCategories have been migrated to Symfony.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('read', request.get('_legacy_controller'))")]
    public function legacyCategoryTreeAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
}
