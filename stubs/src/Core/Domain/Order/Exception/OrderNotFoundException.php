<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Exception;

/**
 * Thrown when order is not found
 */
class OrderNotFoundException extends \PrestaShop\PrestaShop\Core\Domain\Order\Exception\OrderException
{
    public function __construct(private readonly ?\PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId $orderId = null, string $message = '', int $code = 0, ?\Exception $previous = null)
    {
    }
    public function getOrderId(): ?\PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
    {
    }
}
