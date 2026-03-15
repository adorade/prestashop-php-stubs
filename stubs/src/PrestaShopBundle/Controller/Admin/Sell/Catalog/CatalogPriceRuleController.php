<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog;

/**
 * Responsible for Sell > Catalog > Discounts > Catalog Price Rules page
 */
class CatalogPriceRuleController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Displays catalog price rule listing page.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     * @param CatalogPriceRuleFilters $catalogPriceRuleFilters
     *
     * @return Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\CatalogPriceRuleFilters $catalogPriceRuleFilters)
    {
    }
    /**
     * Retrieves catalog prices rules for product.
     *
     * @AdminSecurity("is_granted('read', 'AdminProducts') || is_granted('read', 'AdminSpecificPriceRule')")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function listForProductAction(\Symfony\Component\HttpFoundation\Request $request, int $productId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * Provides filters functionality.
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function searchAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Deletes catalog price rule
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute="admin_catalog_price_rules_index")
     * @DemoRestricted(redirectRoute="admin_catalog_price_rules_index")
     *
     * @param int|string $catalogPriceRuleId
     *
     * @return RedirectResponse
     */
    public function deleteAction($catalogPriceRuleId)
    {
    }
    /**
     * Deletes catalogPriceRules on bulk action
     *
     * @AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute="admin_catalog_price_rules_index")
     * @DemoRestricted(redirectRoute="admin_catalog_price_rules_index")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function bulkDeleteAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Show & process catalog price rule creation.
     *
     * @AdminSecurity("is_granted('create', request.get('_legacy_controller'))")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function createAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Show & process catalog price rule editing.
     *
     * @AdminSecurity("is_granted('update', request.get('_legacy_controller'))")
     *
     * @param int $catalogPriceRuleId
     * @param Request $request
     *
     * @return Response
     */
    public function editAction(\Symfony\Component\HttpFoundation\Request $request, int $catalogPriceRuleId): \Symfony\Component\HttpFoundation\Response
    {
    }
}
