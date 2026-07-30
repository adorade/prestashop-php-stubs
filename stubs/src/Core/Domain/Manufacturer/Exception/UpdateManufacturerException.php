<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\Exception;

/**
 * Is thrown when cannot update manufacturer
 */
class UpdateManufacturerException extends \PrestaShop\PrestaShop\Core\Domain\Manufacturer\Exception\ManufacturerException
{
    /**
     * When fails to update single manufacturer status
     */
    public const FAILED_UPDATE_STATUS = 10;
    /**
     * When fails to update manufacturers status in bulk action
     */
    public const FAILED_BULK_UPDATE_STATUS = 20;
}
