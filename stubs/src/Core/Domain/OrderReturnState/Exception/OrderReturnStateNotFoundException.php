<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Exception;

/**
 * Is thrown when order state is not found
 */
class OrderReturnStateNotFoundException extends \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Exception\OrderReturnStateException
{
    /**
     * @param string $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\OrderReturnState\ValueObject\OrderReturnStateId $orderReturnStateId, $message = '', $code = 0, $previous = null)
    {
    }
    /**
     * @return OrderReturnStateId
     */
    public function getOrderReturnStateId()
    {
    }
}
