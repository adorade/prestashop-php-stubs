<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Query;

/**
 * Retrieves product specific prices
 */
class GetSpecificPriceList
{
    /**
     * @param int $productId
     * @param int $languageId
     * @param int|null $limit
     * @param int|null $offset
     * @param array<string, mixed> $filters
     */
    public function __construct(int $productId, int $languageId, ?int $limit = null, ?int $offset = null, array $filters = [])
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
    /**
     * @return array<string, mixed>
     */
    public function getFilters(): array
    {
    }
}
