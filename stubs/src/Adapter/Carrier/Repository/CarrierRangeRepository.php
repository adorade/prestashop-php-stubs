<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\Repository;

/**
 * Provides access to carrier range data source
 */
class CarrierRangeRepository
{
    public function __construct(protected readonly \Doctrine\DBAL\Connection $connection, protected readonly string $dbPrefix, protected readonly \PrestaShop\PrestaShop\Adapter\Carrier\Repository\CarrierRepository $carrierRepository)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId
     *
     * @return array<int, array<int|string>>
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Carrier\Exception\CarrierException
     * @throws \Doctrine\DBAL\Exception
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Exception\AttributeNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Carrier\Exception\CarrierConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Zone\Exception\ZoneException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId
     * @param \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierRangesCollection $rangesCollection
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     */
    public function set(\PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId, \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierRangesCollection $rangesCollection, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
}
