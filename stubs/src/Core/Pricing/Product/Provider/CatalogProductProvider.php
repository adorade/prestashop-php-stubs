<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Product\Provider;

/**
 * Reads raw product pricing data from the catalog tables (ps_product, ps_product_attribute)
 * in a single query. Returns the data as-is with no computation. Used in FO / cart context.
 */
class CatalogProductProvider implements \PrestaShop\PrestaShop\Core\Pricing\Product\Provider\ProductProviderInterface
{
    public function __construct(protected readonly \Doctrine\DBAL\Connection $connection, protected readonly string $dbPrefix)
    {
    }
    public function getProductPriceData(int $productId, int $combinationId): \PrestaShop\PrestaShop\Core\Pricing\Product\Provider\ProductPriceData
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Pricing\Exception\ProductPriceNotFoundException when the product does not exist
     */
    protected function fetchProduct(int $productId): \PrestaShop\PrestaShop\Core\Pricing\Product\Provider\ProductPriceData
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Pricing\Exception\ProductPriceNotFoundException when the product does not exist
     */
    protected function fetchProductWithCombination(int $productId, int $combinationId): \PrestaShop\PrestaShop\Core\Pricing\Product\Provider\ProductPriceData
    {
    }
}
