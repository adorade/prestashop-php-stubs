<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query;

/**
 * Retrieves product combinations
 */
class GetEditableCombinationsList
{
    /**
     * @param int $productId
     * @param int $languageId
     * @param ShopConstraint $shopConstraint
     * @param int|null $limit
     * @param int|null $offset
     * @param string|null $orderBy
     * @param string|null $orderWay
     * @param array<string, mixed> $filters
     */
    public function __construct(int $productId, int $languageId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, ?int $limit = null, ?int $offset = null, ?string $orderBy = null, ?string $orderWay = null, array $filters = [])
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
     * @return string|null
     */
    public function getOrderBy(): ?string
    {
    }
    /**
     * @return string|null
     */
    public function getOrderWay(): ?string
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
