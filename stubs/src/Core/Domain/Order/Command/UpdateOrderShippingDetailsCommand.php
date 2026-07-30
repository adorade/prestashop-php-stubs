<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Command;

/**
 * Updates shipping details for given order.
 */
class UpdateOrderShippingDetailsCommand
{
    /**
     * @param int $orderId
     * @param int $currentOrderCarrierId
     * @param int $newCarrierId
     * @param string $trackingNumber
     */
    public function __construct(int $orderId, int $currentOrderCarrierId, int $newCarrierId, ?string $trackingNumber = '')
    {
    }
    /**
     * @return OrderId
     */
    public function getOrderId(): \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
    {
    }
    /**
     * @return int
     */
    public function getNewCarrierId(): int
    {
    }
    /**
     * @return string|null
     */
    public function getShippingTrackingNumber(): ?string
    {
    }
    /**
     * @return int
     */
    public function getCurrentOrderCarrierId(): int
    {
    }
}
