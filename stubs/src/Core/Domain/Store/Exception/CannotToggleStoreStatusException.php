<?php

namespace PrestaShop\PrestaShop\Core\Domain\Store\Exception;

/**
 * Thrown when cannot toggle store status
 */
class CannotToggleStoreStatusException extends \PrestaShop\PrestaShop\Core\Domain\Store\Exception\StoreException
{
    /**
     * Thrown when cannot toggle single store status.
     */
    public const SINGLE_TOGGLE = 10;
    /**
     * Thrown when cannot bulk toggle stores status.
     */
    public const BULK_TOGGLE = 20;
}
