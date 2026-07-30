<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Query;

class SearchProductsForAssociation
{
    /**
     * This is the minimum length of search phrase
     */
    public const SEARCH_PHRASE_MIN_LENGTH = 3;
    /**
     * @param string $phrase
     * @param int $languageId
     * @param int $shopId
     * @param int|null $limit
     */
    public function __construct(string $phrase, int $languageId, int $shopId, ?int $limit = null)
    {
    }
    /**
     * @return string
     */
    public function getPhrase(): string
    {
    }
    /**
     * @return ShopId
     */
    public function getShopId(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId
    {
    }
    /**
     * @return LanguageId
     */
    public function getLanguageId(): \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId
    {
    }
    /**
     * @return int|null
     */
    public function getLimit(): ?int
    {
    }
}
