<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command;

/**
 * Toggles manufacturer status
 */
class ToggleManufacturerStatusCommand
{
    /**
     * @param int $manufacturerId
     * @param bool $expectedStatus
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Manufacturer\Exception\ManufacturerConstraintException
     */
    public function __construct($manufacturerId, $expectedStatus)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Manufacturer\ValueObject\ManufacturerId
     */
    public function getManufacturerId()
    {
    }
    /**
     * @return bool
     */
    public function getExpectedStatus()
    {
    }
}
