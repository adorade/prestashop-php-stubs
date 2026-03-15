<?php

namespace PrestaShop\PrestaShop\Core\Domain\Zone\Command;

/**
 * Deletes zone
 */
class DeleteZoneCommand
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
