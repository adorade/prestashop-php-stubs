<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\Repository;

/**
 * Provides access to carrier data source
 */
class CarrierRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractMultiShopObjectModelRepository
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopRepository $shopRepository, private readonly \Doctrine\DBAL\Connection $connection, private readonly string $prefix)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId
     *
     * @return \Carrier
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Exception\AttributeNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId): \Carrier
    {
    }
    public function assertCarrierExists(\PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId): void
    {
    }
    public function add(\Carrier $carrier, array $shopIds): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId
    {
    }
    public function update(\Carrier $carrier, int $errorCode): void
    {
    }
    /**
     * Returns a single shop ID when the constraint is a single shop, and the list of shops associated to the carrier
     * when the constraint is for all shops
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[]
     */
    public function getShopIdsByConstraint(\PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[]
     */
    public function getAssociatedShopIds(\PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[]
     */
    public function getAssociatedShopIdsFromGroup(\PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId): array
    {
    }
    /**
     * Create a new version of the carrier, or return the carrier as is if it don't have order linked.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId
     *
     * @return \Carrier
     */
    public function getEditableOrNewVersion(\PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId): \Carrier
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId
     * @param int[] $shopIds
     *
     * @return void
     */
    public function updateAssociatedShops(\PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId, array $shopIds): void
    {
    }
    /**
     * Return all zones associated for the given carrier
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId
     *
     * @return array
     */
    public function getAssociatedZones(\PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId): array
    {
    }
    /**
     * We add the association between the carrier and the zone.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId
     * @param int[] $zoneIds
     *
     * @return void
     */
    public function updateAssociatedZones(\PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId, array $zoneIds): void
    {
    }
    public function getTaxRulesGroup(\PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): int
    {
    }
    public function setTaxRulesGroup(\PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId, \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId $taxRulesGroupId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    public function getOrdersCount(\PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId): int
    {
    }
    /**
     * Returns the position of the last carrier in the list.
     * The caller is responsible for incrementing this value by 1 to get the next position.
     *
     * @return int Position of the last carrier
     */
    public function getLastPosition(): ?int
    {
    }
    public function getCarrierConstraints(\PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierConstraints
    {
    }
    /**
     * Checks if a given carrier is available for a specific zone.
     *
     * @return bool True if carrier is available for the zone, false otherwise
     */
    public function checkCarrierZone(\PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId, \PrestaShop\PrestaShop\Core\Domain\Zone\ValueObject\ZoneId $zoneId): bool
    {
    }
    /**
     * Returns a mapping of product IDs to their available carriers.
     *
     * @param int[] $productIds list of product IDs
     *
     * @return array<int, array<int, array{id_carrier: int, name: string}>>
     *
     * An associative array where the key is the product ID and the value is an array of carriers.
     * Each carrier is represented as an associative array with keys:
     *  - id_carrier: The carrier ID.
     *  - name: The carrier name.
     */
    public function findCarriersByProductIds(array $productIds, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): array
    {
    }
}
