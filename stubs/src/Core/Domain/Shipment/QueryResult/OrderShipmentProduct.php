<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\QueryResult;

class OrderShipmentProduct
{
    public function __construct(private int $orderDetailId, private int $quantity, private string $productName, private string $productReference, private string $productImagePath)
    {
    }
    /**
     * @return int
     */
    public function getOrderDetailId(): int
    {
    }
    /**
     * @return string
     */
    public function getProductName(): string
    {
    }
    /**
     * @return int
     */
    public function getQuantity(): int
    {
    }
    /**
     * @return string
     */
    public function getProductReference(): string
    {
    }
    /**
     * @return string
     */
    public function getProductImagePath(): string
    {
    }
    public function toArray(): array
    {
    }
}
