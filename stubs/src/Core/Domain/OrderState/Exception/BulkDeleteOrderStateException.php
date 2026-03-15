<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderState\Exception;

/**
 * Thrown on failure to delete all selected order states without errors
 */
class BulkDeleteOrderStateException extends \PrestaShop\PrestaShop\Core\Domain\OrderState\Exception\OrderStateException
{
    /**
     * @param int[] $orderStatesId
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct(array $orderStatesId, $message = '', $code = 0, \Exception $previous = null)
    {
    }
    /**
     * @return int[]
     */
    public function getOrderStatesIds(): array
    {
    }
}
