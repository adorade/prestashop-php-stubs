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
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId
     */
    public function getLanguageId(): \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId
    {
    }
}
