<?php

namespace PrestaShop\PrestaShop\Core\Domain\Store\Exception;

/**
 * Is thrown when store is invalid
 */
class StoreConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Store\Exception\StoreException
{
    /**
     * Thrown when provided store id is not valid
     */
    public const INVALID_ID = 10;
}
