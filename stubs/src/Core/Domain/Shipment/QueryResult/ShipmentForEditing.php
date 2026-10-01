<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\QueryResult;

class ShipmentForEditing
{
    public function __construct(private int $carrierId, private string $trackingNumber, private array $selectedProducts)
    {
    }
    /**
     * @return int
     */
    public function getCarrierId(): int
    {
    }
    /**
     * @return string
     */
    public function getTrackingNumber(): string
    {
    }
    /**
     * @return array<int, int> Map of productId to quantity
     */
    public function getProductsIds()
    {
    }
    public function toArray(): array
    {
    }
}
