<?php

namespace PrestaShop\PrestaShop\Core\Domain\Zone\ValueObject;

/**
 * Defines Zone ID with it's constraints
 */
class ZoneId
{
    /**
     * @param int $zoneId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Zone\Exception\ZoneException
     */
    public function __construct(int $zoneId)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
