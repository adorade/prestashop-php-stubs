<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception;

/**
 * Is thrown when SqlRequest cannot be deleted
 */
class CannotDeleteSqlRequestException extends \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestException
{
    /**
     * When deleting single SqlRequest
     */
    public const CANNOT_SINGLE_DELETE = 10;
    /**
     * When deleting SqlRequest in bulk action
     */
    public const CANNOT_BULK_DELETE = 20;
}
