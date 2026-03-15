<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Query;

/**
 * Provides related products for given product
 */
class GetRelatedProducts
{
    /**
     * @param int $productId
     * @param int $languageId
     */
    public function __construct(int $productId, int $languageId)
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return LanguageId
     */
    public function getLanguageId(): \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId
    {
    }
}
