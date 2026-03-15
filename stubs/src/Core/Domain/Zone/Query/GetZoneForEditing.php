<?php

namespace PrestaShop\PrestaShop\Core\Domain\Zone\Query;

/**
 * Gets zone for editing in back office
 */
class GetZoneForEditing
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
