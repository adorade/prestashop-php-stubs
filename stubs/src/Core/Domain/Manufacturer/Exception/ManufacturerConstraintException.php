<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\Exception;

/**
 * Is thrown when Manufacturer constraint is violated
 */
class ManufacturerConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Manufacturer\Exception\ManufacturerException
{
    /**
     * When manufacturer id is not valid
     */
    public const INVALID_ID = 10;
    /**
     * When manufacturer status is not valid
     */
    public const INVALID_STATUS = 20;
}
