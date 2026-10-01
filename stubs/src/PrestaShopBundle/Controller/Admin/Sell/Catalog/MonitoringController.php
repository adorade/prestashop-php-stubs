<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog;

/**
 * Responsible for Sell > Catalog > Monitoring page
 */
class MonitoringController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    public static function getSubscribedServices(): array
    {
    }
    /**
     * Shows Monitoring listing page
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
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.grid_factory.empty_category')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $emptyCategoryGrid,
        \PrestaShop\PrestaShop\Core\Search\Filters\Monitoring\EmptyCategoryFilters $emptyCategoryFilters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.grid_factory.no_qty_product_with_combination')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $noQtyProductWithCombinationGrid,
        \PrestaShop\PrestaShop\Core\Search\Filters\Monitoring\NoQtyProductWithCombinationFilters $noQtyProductWithCombinationFilters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.grid_factory.no_qty_product_without_combination')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $noQtyProductWithoutCombinationGrid,
        \PrestaShop\PrestaShop\Core\Search\Filters\Monitoring\NoQtyProductWithoutCombinationFilters $noQtyProductWithoutCombinationFilters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.grid_factory.disabled_product')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $disabledProductGrid,
        \PrestaShop\PrestaShop\Core\Search\Filters\Monitoring\DisabledProductFilters $disabledProductFilters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.grid_factory.product_without_image')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $productWithoutImageGrid,
        \PrestaShop\PrestaShop\Core\Search\Filters\Monitoring\ProductWithoutImageFilters $productWithoutImageFilters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.grid_factory.product_without_description')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $productWithoutDescriptionGrid,
        \PrestaShop\PrestaShop\Core\Search\Filters\Monitoring\ProductWithoutDescriptionFilters $productWithoutDescriptionFilters,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.grid.grid_factory.product_without_price')]
        \PrestaShop\PrestaShop\Core\Grid\GridFactoryInterface $productWithoutPriceGrid,
        \PrestaShop\PrestaShop\Core\Search\Filters\Monitoring\ProductWithoutPriceFilters $productWithoutPriceFilters
    ): \Symfony\Component\HttpFoundation\Response
    {
    }
    /**
     * Provides filters functionality
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))")]
    public function searchAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
    /**
     * Delete monitoring items in bulk action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", redirectRoute: 'admin_monitorings_index', message: 'You do not have permission to delete this.')]
    public function deleteBulkAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
    }
}
