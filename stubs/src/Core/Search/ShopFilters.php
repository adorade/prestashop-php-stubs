<?php

namespace PrestaShop\PrestaShop\Core\Search;

/**
 * ShopFilters contains a ShopConstraint to handle multishop feature, the shop constraint is mandatory and immutable.
 * The class can't be used as is and needs to be used as a parent, you should respect the parameters orders in your
 * implementation (if you don't you'll have to handle the specific build via a TypedBuilderInterface dedicated service).
 */
abstract class ShopFilters extends \PrestaShop\PrestaShop\Core\Search\Filters implements \PrestaShop\PrestaShop\Core\Grid\Search\ShopSearchCriteriaInterface
{
    /**
     * @param ShopConstraint $shopConstraint
     * @param array<string, mixed> $filters
     * @param string $filterId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, array $filters = [], $filterId = '')
    {
    }
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}
