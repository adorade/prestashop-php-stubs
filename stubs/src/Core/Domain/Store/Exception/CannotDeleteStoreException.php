<?php

namespace PrestaShop\PrestaShop\Core\Domain\Store\Exception;

/**
 * Thrown when cannot delete store
 */
class CannotDeleteStoreException extends \PrestaShop\PrestaShop\Core\Domain\Store\Exception\StoreException
{
    public const FAILED_DELETE = 1;
    public const FAILED_BULK_DELETE = 2;
}
