<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Exception;

/**
 * Thrown when order is not found
 */
class OrderNotFoundException extends \PrestaShop\PrestaShop\Core\Domain\Order\Exception\OrderException
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId $orderId
     * @param string $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId $orderId, $message = '', $code = 0, $previous = null)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
     */
    public function getOrderId()
    {
    }
}
