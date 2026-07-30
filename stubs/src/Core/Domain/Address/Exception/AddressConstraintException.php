<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\Exception;

/**
 * Is thrown when address constraint is violated
 */
class AddressConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Address\Exception\AddressException
{
    /**
     * When address id is not valid
     */
    public const INVALID_ID = 10;
    /**
     * When manufacturer id provided for address is not valid
     */
    public const INVALID_MANUFACTURER_ID = 20;
    /**
     * When one or more unspecified fields in address are invalid
     */
    public const INVALID_REQUIRED_FIELDS = 30;
}
