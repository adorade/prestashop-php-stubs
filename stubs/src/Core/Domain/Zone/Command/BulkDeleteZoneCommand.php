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
     * @return array<int, ZoneId>
     */
    public function getZoneIds(): array
    {
    }
}
