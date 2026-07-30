<?php

namespace PrestaShop\PrestaShop\Core\Search\Filters;

/**
 * Filters of product combination list.
 *
 * Combination list is handled by javascript so it doesn't need grid id
 */
class ProductCombinationFilters extends \PrestaShop\PrestaShop\Core\Search\ShopFilters
{
    public const LIST_LIMIT = 10;
    /**
     * {@inheritDoc}
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, array $filters = [])
    {
    }
    /**
     * @return int
     */
    public function getProductId(): int
    {
    }
    /**
     * @return int
     */
    public function getShopId(): int
    {
    }
    /**
     * {@inheritdoc}
     */
    public static function getDefaults()
    {
    }
    /**
     * @param int $productId
     *
     * @return string
     */
    public static function generateFilterId(int $productId): string
    {
    }
}
