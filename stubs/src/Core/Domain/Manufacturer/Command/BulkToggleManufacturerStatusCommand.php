<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command;

/**
 * Toggles manufacturer status in bulk action
 */
class BulkToggleManufacturerStatusCommand
{
    /**
     * @param int[] $manufacturerIds
     * @param bool $expectedStatus
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Manufacturer\Exception\ManufacturerConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Manufacturer\Exception\ManufacturerConstraintException
     */
    public function __construct(array $manufacturerIds, $expectedStatus)
    {
    }
    /**
     * @return bool
     */
    public function getExpectedStatus()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Manufacturer\ValueObject\ManufacturerId[]
     */
    public function getManufacturerIds()
    {
    }
}
