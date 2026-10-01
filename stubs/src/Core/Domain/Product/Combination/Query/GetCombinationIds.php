<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query;

class GetCombinationIds
{
    /**
     * @param int $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     * @param int|null $limit
     * @param int|null $offset
     * @param string|null $orderBy
     * @param string|null $orderWay
     * @param array<string, mixed> $filters
     */
    public function __construct(int $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, ?int $limit = null, ?int $offset = null, ?string $orderBy = null, ?string $orderWay = null, array $filters = [])
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
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
