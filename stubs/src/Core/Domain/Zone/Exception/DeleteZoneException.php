<?php

namespace PrestaShop\PrestaShop\Core\Domain\Zone\Exception;

/**
 * Is raised when zone or zones cannot be deleted
 */
class DeleteZoneException extends \PrestaShop\PrestaShop\Core\Domain\Zone\Exception\ZoneException
{
    /**
     * When fails to delete single zone
     */
    public const FAILED_DELETE = 1;
    /**
     * When fails to delete zones in bulk actions
     */
    public const FAILED_BULK_DELETE = 2;
}
