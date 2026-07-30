<?php

namespace PrestaShop\PrestaShop\Core\Domain\Zone\Command;

/**
 * Toggles zones status on bulk action
 */
class BulkToggleZoneStatusCommand
{
    /**
     * @param bool $expectedStatus
     * @param array<int, int> $zoneIds
     */
    public function __construct(bool $expectedStatus, array $zoneIds)
    {
    }
    /**
     * @return bool
     */
    public function getExpectedStatus(): bool
    {
    }
    /**
     * @return array<int, ZoneId>
     */
    public function getZoneIds(): array
    {
    }
}
