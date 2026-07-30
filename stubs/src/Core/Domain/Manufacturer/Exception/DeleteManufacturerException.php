<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\Exception;

/**
 * Is thrown manufacturer or manufacturers cannot be deleted
 */
class DeleteManufacturerException extends \PrestaShop\PrestaShop\Core\Domain\Manufacturer\Exception\ManufacturerException
{
    /**
     * When fails to delete single manufacturer
     */
    public const FAILED_DELETE = 10;
    /**
     * When fails to delete manufacturers in bulk action
     */
    public const FAILED_BULK_DELETE = 20;
}
