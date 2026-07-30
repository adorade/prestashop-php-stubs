<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Exception;

/**
 * Is thrown when order return state cannot be deleted
 */
class DeleteOrderReturnStateException extends \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Exception\OrderReturnStateException
{
    /**
     * When fails to delete single order return state
     */
    public const FAILED_DELETE = 10;
    /**
     * When fails to delete order return states in bulk action
     */
    public const FAILED_BULK_DELETE = 20;
}
