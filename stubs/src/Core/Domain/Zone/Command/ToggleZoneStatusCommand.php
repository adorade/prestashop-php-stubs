<?php

namespace PrestaShop\PrestaShop\Core\Domain\Zone\Command;

/**
 * Class ToggleZoneStatusCommand is responsible for toggling zone status
 */
class ToggleZoneStatusCommand
{
    /**
     * @param int $zoneId
     */
    public function __construct(int $zoneId)
    {
    }
    /**
     * @return ZoneId
     */
    public function getZoneId(): \PrestaShop\PrestaShop\Core\Domain\Zone\ValueObject\ZoneId
    {
    }
}
