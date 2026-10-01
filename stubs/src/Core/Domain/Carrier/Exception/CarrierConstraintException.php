<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\Exception;

/**
 * Is thrown when carrier is invalid
 */
class CarrierConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Carrier\Exception\CarrierException
{
    /**
     * Thrown when provided carrier id is not valid
     */
    public const INVALID_ID = 10;
    /**
     * Thrown when carrier reference id is not valid
     */
    public const INVALID_REFERENCE_ID = 20;
}
