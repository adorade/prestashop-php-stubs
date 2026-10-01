<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Exception;

/**
 * Thrown when order detail is not found
 */
class OrderDetailNotFoundException extends \PrestaShop\PrestaShop\Core\Domain\Order\Exception\OrderException
{
    public function __construct(private readonly ?\PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject\OrderDetailId $orderDetailId = null, string $message = '', int $code = 0, ?\Exception $previous = null)
    {
    }
    public function getOrderDetailId(): ?\PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject\OrderDetailId
    {
    }
}
