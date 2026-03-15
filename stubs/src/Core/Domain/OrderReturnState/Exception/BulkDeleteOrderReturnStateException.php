<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Exception;

/**
 * Thrown on failure to delete all selected order return states without errors
 */
class BulkDeleteOrderReturnStateException extends \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Exception\OrderReturnStateException
{
    /**
     * @param int[] $orderReturnStatesId
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct(array $orderReturnStatesId, string $message = '', int $code = 0, \Exception $previous = null)
    {
    }
    /**
     * @return int[]
     */
    public function getOrderReturnStatesIds(): array
    {
    }
}
