<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\Query;

class ListAvailableShipmentsForProduct
{
    public function __construct(int $orderId, int $productId)
    {
    }
    public function getOrderId(): \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
    {
    }
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
}
