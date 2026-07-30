<?php

namespace PrestaShop\PrestaShop\Core\Domain\Zone\QueryResult;

/**
 * Transfers zone data for editing
 */
class EditableZone
{
    /**
     * @param ZoneId $zoneId
     * @param string $name
     * @param bool $enabled
     * @param array $associatedShops
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Zone\ValueObject\ZoneId $zoneId, string $name, bool $enabled, array $associatedShops)
    {
    }
    /**
     * @return ZoneId
     */
    public function getZoneId(): \PrestaShop\PrestaShop\Core\Domain\Zone\ValueObject\ZoneId
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
    }
    /**
     * @return array
     */
    public function getAssociatedShops(): array
    {
    }
}
