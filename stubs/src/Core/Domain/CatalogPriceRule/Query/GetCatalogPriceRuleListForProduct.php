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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductConstraintException
     */
    public function __construct(int $productId, int $langId, ?int $limit = null, ?int $offset = null)
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
