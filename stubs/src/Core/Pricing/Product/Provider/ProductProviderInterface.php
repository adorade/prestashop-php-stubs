<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Product\Provider;

/**
 * Data-access layer for product pricing data. Different implementations serve
 * different contexts (catalog for FO, order_detail for BO, mock for tests).
 */
interface ProductProviderInterface
{
    /**
     * Returns the raw pricing data for a product and optionally its combination.
     *
     * @throws \PrestaShop\PrestaShop\Core\Pricing\Exception\ProductPriceNotFoundException when the product does not exist
     */
    public function getProductPriceData(int $productId, int $combinationId): \PrestaShop\PrestaShop\Core\Pricing\Product\Provider\ProductPriceData;
}
