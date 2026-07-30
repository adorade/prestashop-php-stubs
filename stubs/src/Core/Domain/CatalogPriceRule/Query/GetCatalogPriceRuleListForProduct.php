<?php

namespace PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Query;

class GetCatalogPriceRuleListForProduct
{
    /**
     * GetCatalogPriceRuleListForProduct constructor.
     *
     * @param int $productId
     * @param int $langId
     * @param int|null $limit
     * @param int|null $offset
     *
     * @throws ProductConstraintException
     */
    public function __construct(int $productId, int $langId, ?int $limit = null, ?int $offset = null)
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
    public function getLangId(): \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId
    {
    }
    /**
     * @return int|null
     */
    public function getLimit(): ?int
    {
    }
    /**
     * @return int|null
     */
    public function getOffset(): ?int
    {
    }
}
