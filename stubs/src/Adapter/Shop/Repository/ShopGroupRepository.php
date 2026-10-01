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
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId
     *
     * @return \ShopGroup
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopGroupNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId): \ShopGroup
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId
     *
     * @return \ShopGroup
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopGroupNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopNotFoundException
     */
    public function getByShop(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \ShopGroup
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopNotFoundException
     */
    public function getShopGroupIdByShopId(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopGroupNotFoundException
     */
    public function assertShopGroupExists(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[]
     */
    public function getShopsFromGroup(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId): array
    {
    }
}
