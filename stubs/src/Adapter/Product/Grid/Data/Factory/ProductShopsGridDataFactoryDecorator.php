<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Grid\Data\Factory;

/**
 * Decorates product grid data, but instead of adding details of all shops for the associated column, we prepare detail
 * for single shop on each row.
 */
class ProductShopsGridDataFactoryDecorator extends \PrestaShop\PrestaShop\Adapter\Product\Grid\Data\Factory\ProductGridDataFactoryDecorator
{
    /**
     * @param array $products
     * @param ShopSearchCriteriaInterface $searchCriteria
     *
     * @return array<int, array<string, mixed>>
     */
    protected function applyShopModifications(array $products, \PrestaShop\PrestaShop\Core\Grid\Search\ShopSearchCriteriaInterface $searchCriteria): array
    {
    }
}
