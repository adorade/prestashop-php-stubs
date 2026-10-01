<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject;

class OrderDetailQuantity
{
    /**
     * @param array<int, array{id_order_detail: int, quantity: int}> $items
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shipment\Exception\ShipmentException
     */
    public function __construct(array $items)
    {
    }
    /**
     * @return array<int, array{id_order_detail: int, quantity: int}>
     */
    public function getValue(): array
    {
    }
}
