<?php

namespace PrestaShop\PrestaShop\Core\Domain\Zone\Command;

/**
 * Deletes zones on bulk action
 */
class BulkDeleteZoneCommand
{
    /**
     * @param array<int, int> $zoneIds
     */
    public function __construct(array $zoneIds)
    {
    }
    /**
     * @return array<int, \PrestaShop\PrestaShop\Core\Domain\Zone\ValueObject\ZoneId>
     */
    public function getZoneIds(): array
    {
    }
}
