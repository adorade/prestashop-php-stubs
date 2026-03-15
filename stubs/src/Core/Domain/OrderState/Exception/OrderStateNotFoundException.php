<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderState\Exception;

/**
 * Is thrown when order state is not found
 */
class OrderStateNotFoundException extends \PrestaShop\PrestaShop\Core\Domain\OrderState\Exception\OrderStateException
{
    /**
     * @param string $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject\OrderStateId $orderStateId, $message = '', $code = 0, $previous = null)
    {
    }
    /**
     * @return OrderStateId
     */
    public function getOrderStateId()
    {
    }
}
