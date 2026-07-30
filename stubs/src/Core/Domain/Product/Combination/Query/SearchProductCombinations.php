<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query;

class SearchProductCombinations
{
    public const DEFAULT_RESULTS_LIMIT = 20;
    /**
     * @param int $productId
     * @param int $languageId
     * @param ShopConstraint $shopConstraint
     * @param string $searchPhrase
     */
    public function __construct(int $productId, int $languageId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, string $searchPhrase, int $limit = self::DEFAULT_RESULTS_LIMIT)
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
    /**
     * @return ShopConstraint
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
    /**
     * @return string
     */
    public function getSearchPhrase(): string
    {
    }
    /**
     * @return int
     */
    public function getLimit(): int
    {
    }
}
