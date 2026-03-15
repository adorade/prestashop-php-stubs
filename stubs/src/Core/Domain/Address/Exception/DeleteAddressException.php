<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\Exception;

/**
 * Is thrown when address or addresses cannot be deleted
 */
class DeleteAddressException extends \PrestaShop\PrestaShop\Core\Domain\Address\Exception\AddressException
{
    /**
     * When fails to delete single address
     */
    public const FAILED_DELETE = 10;
    /**
     * When fails to delete address in bulk action
     */
    public const FAILED_BULK_DELETE = 20;
}
