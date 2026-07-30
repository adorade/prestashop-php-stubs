<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\Exception;

/**
 * Thrown when cannot toggle carrier status
 */
class CannotToggleCarrierStatusException extends \PrestaShop\PrestaShop\Core\Domain\Carrier\Exception\CarrierException
{
    /**
     * Thrown when cannot toggle single carrier status.
     */
    public const SINGLE_TOGGLE = 10;
    /**
     * Thrown when cannot bulk toggle carrier status.
     */
    public const BULK_TOGGLE = 20;
}
