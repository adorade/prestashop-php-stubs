<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryHandler;

/**
 * Search products eligible for free gift discounts, returning disabled state
 * for products that cannot be used as gifts.
 */
interface SearchProductsForFreeGiftHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Query\SearchProductsForFreeGift $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductForFreeGift[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Query\SearchProductsForFreeGift $query): array;
}
