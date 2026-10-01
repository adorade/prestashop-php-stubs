<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog;

/**
 * Responsible for Sell > Catalog > Monitoring page
 */
class MonitoringController extends \PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController
{
    /**
     * Shows Monitoring listing page
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\Monitoring\EmptyCategoryFilters $emptyCategoryFilters
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\Monitoring\NoQtyProductWithCombinationFilters $noQtyProductWithCombinationFilters
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\Monitoring\NoQtyProductWithoutCombinationFilters $noQtyProductWithoutCombinationFilters
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\Monitoring\DisabledProductFilters $disabledProductFilters
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\Monitoring\ProductWithoutImageFilters $productWithoutImageFilters
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\Monitoring\ProductWithoutDescriptionFilters $productWithoutDescriptionFilters
     * @param \PrestaShop\PrestaShop\Core\Search\Filters\Monitoring\ProductWithoutPriceFilters $productWithoutPriceFilters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request, \PrestaShop\PrestaShop\Core\Search\Filters\Monitoring\EmptyCategoryFilters $emptyCategoryFilters, \PrestaShop\PrestaShop\Core\Search\Filters\Monitoring\NoQtyProductWithCombinationFilters $noQtyProductWithCombinationFilters, \PrestaShop\PrestaShop\Core\Search\Filters\Monitoring\NoQtyProductWithoutCombinationFilters $noQtyProductWithoutCombinationFilters, \PrestaShop\PrestaShop\Core\Search\Filters\Monitoring\DisabledProductFilters $disabledProductFilters, \PrestaShop\PrestaShop\Core\Search\Filters\Monitoring\ProductWithoutImageFilters $productWithoutImageFilters, \PrestaShop\PrestaShop\Core\Search\Filters\Monitoring\ProductWithoutDescriptionFilters $productWithoutDescriptionFilters, \PrestaShop\PrestaShop\Core\Search\Filters\Monitoring\ProductWithoutPriceFilters $productWithoutPriceFilters)
    {
    }
    /**
     * Provides filters functionality
     *
     * @AdminSecurity("is_granted('read', request.get('_legacy_controller'))")
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function searchAction(\Symfony\Component\HttpFoundation\Request $request)
    {
    }
    /**
     * Delete monitoring items in bulk action.
     *
     * @AdminSecurity(
     *     "is_granted('delete', request.get('_legacy_controller'))",
     *     redirectRoute="admin_monitorings_index",
     *     message="You do not have permission to delete this."
     * )
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteBulkAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}
