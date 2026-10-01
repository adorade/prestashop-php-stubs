<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query;

class SearchCombinationsForAssociation
{
    /**
     * This is the minimum length of search phrase
     */
    public const SEARCH_PHRASE_MIN_LENGTH = 3;
    /**
     * @var array<string>
     */
    protected $filters;
    /**
     * @param string $phrase
     * @param int $languageId
     * @param int $shopId
     * @param array $filters
     * @param int|null $limit
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopException
     */
    public function __construct(string $phrase, int $languageId, int $shopId, array $filters = [], ?int $limit = null)
    {
    }
    /**
     * @return string
     */
    public function getPhrase(): string
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId
     */
    public function getShopId(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId
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
    /**
     * @return array<string>
     */
    public function getFilters(): array
    {
    }
}
