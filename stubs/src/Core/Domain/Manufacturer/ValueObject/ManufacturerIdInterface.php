<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\ValueObject;

/**
 * This interface allows to explicitly define whether the manufacturer relation is optional or required.
 *
 * @see ManufacturerId
 * @see NoManufacturerId
 */
interface ManufacturerIdInterface
{
    /**
     * @return int
     */
    public function getValue();
}
