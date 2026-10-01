<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\Command;

class CreateShipment
{
    public function __construct(int $orderId, int $carrierId, int $productId, int $quantity, ?int $combinationId = 0)
    {
    }
    public function getOrderId(): \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
    {
    }
    public function getCarrierId(): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId
    {
    }
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    public function getQuantity(): int
    {
    }
    public function getProductCombinationId(): ?\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
    {
    }
}
