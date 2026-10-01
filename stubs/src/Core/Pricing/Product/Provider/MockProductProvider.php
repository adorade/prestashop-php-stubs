<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Product\Provider;

/**
 * In-memory product provider for unit tests. Accepts pre-configured arrays of
 * ProductPriceData keyed by "productId" or "productId-combinationId".
 */
class MockProductProvider implements \PrestaShop\PrestaShop\Core\Pricing\Product\Provider\ProductProviderInterface
{
    /**
     * @param array<int|string, ProductPriceData> $priceDataMap keyed by productId (int) or "productId-combinationId" (string)
     */
    public function __construct(protected readonly array $priceDataMap = [])
    {
    }
    public function getProductPriceData(int $productId, int $combinationId): \PrestaShop\PrestaShop\Core\Pricing\Product\Provider\ProductPriceData
    {
    }
}
