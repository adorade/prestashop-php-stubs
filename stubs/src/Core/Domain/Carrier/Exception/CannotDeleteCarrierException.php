<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\Exception;

/**
 * Thrown when cannot delete carrier(s)
 */
class CannotDeleteCarrierException extends \PrestaShop\PrestaShop\Core\Domain\Carrier\Exception\CarrierException
{
    /**
     * Thrown when cannot delete single carrier.
     */
    public const SINGLE_DELETE = 10;
    /**
     * Thrown when cannot bulk delete carriers.
     */
    public const BULK_DELETE = 20;
}
