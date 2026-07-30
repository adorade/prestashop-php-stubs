<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\Exception;

/**
 * Thrown on failure to delete all selected addresses without errors
 */
class BulkDeleteAddressException extends \PrestaShop\PrestaShop\Core\Domain\Address\Exception\AddressException
{
    /**
     * @param int[] $addressIds
     * @param string $message
     * @param int $code
     * @param Exception $previous
     */
    public function __construct(array $addressIds, $message = '', $code = 0, \Exception $previous = null)
    {
    }
    /**
     * @return int[]
     */
    public function getAddressIds(): array
    {
    }
}
