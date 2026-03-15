<?php

namespace PrestaShop\PrestaShop\Adapter\Shop\Repository;

/**
 * Provides methods to access data storage for shopGroup
 */
class ShopGroupRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix)
    {
    }
    /**
     * @param ShopGroupId $shopGroupId
     *
     * @return ShopGroup
     *
     * @throws ShopGroupNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId): \ShopGroup
    {
    }
    /**
     * @param ShopId $shopId
     *
     * @return ShopGroup
     *
     * @throws ShopGroupNotFoundException
     * @throws ShopNotFoundException
     */
    public function getByShop(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \ShopGroup
    {
    }
    /**
     * @param ShopId $shopId
     *
     * @return ShopGroupId
     *
     * @throws ShopNotFoundException
     */
    public function getShopGroupIdByShopId(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId
    {
    }
    /**
     * @param ShopGroupId $shopGroupId
     *
     * @throws ShopGroupNotFoundException
     */
    public function assertShopGroupExists(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId): void
    {
    }
    /**
     * @param ShopGroupId $shopGroupId
     *
     * @return ShopId[]
     */
    public function getShopsFromGroup(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId): array
    {
    }
}
