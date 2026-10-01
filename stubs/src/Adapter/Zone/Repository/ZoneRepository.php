<?php

namespace PrestaShop\PrestaShop\Adapter\Zone\Repository;

/**
 * Provides methods to access data storage of Zone
 */
final class ZoneRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    public function __construct(private readonly \Doctrine\DBAL\Connection $connection, private readonly string $prefix)
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Zone\Exception\ZoneNotFoundException
     */
    public function assertZoneExists(\PrestaShop\PrestaShop\Core\Domain\Zone\ValueObject\ZoneId $zoneId): void
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Zone\Exception\ZoneNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Zone\ValueObject\ZoneId $zoneId): \Zone
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Zone\Exception\ZoneNotFoundException
     */
    public function getZoneIdByCountryId(\PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId): \PrestaShop\PrestaShop\Core\Domain\Zone\ValueObject\ZoneId
    {
    }
}
