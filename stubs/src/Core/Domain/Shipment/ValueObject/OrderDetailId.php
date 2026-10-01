<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject;

class OrderDetailId
{
    /**
     * @param int $orderDetailId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shipment\Exception\ShipmentException
     */
    public function __construct(int $orderDetailId)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
