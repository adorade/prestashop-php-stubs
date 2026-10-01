<?php

namespace PrestaShop\PrestaShop\Adapter\Shop\Repository;

/**
 * Provides methods to access data storage for shop
 */
class ShopRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId
     *
     * @return \Shop
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \Shop
    {
    }
    public function getShopName(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): string
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopNotFoundException
     */
    public function assertShopExists(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): void
    {
    }
    /**
     * Returns every shop id covered by the constraint: single shop → [id]; ShopCollection
     * → its ids; shop group → the group's shops; all shops → every shop. Group and
     * all-shops scopes only contain usable shops — soft-deleted (`deleted = 1`) and
     * inactive (`active = 0`) shops are excluded, matching the native
     * Shop::getContextListShopID() fan-out — and are returned ordered by shop id.
     * Explicit ids (single shop, ShopCollection) are returned as given, without existence
     * or state checks: naming a shop is the caller's responsibility.
     *
     * This is the single query implementation; ShopListResolver memoizes over it.
     *
     * @return int[]
     */
    public function getAssociatedShopIds(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
    public function getAllShopIds(): array
    {
    }
}
