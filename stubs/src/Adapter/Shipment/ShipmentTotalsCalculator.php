<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment;

class ShipmentTotalsCalculator implements \PrestaShop\PrestaShop\Adapter\Shipment\ShipmentTotalsCalculatorInterface
{
    public function __construct(private \PrestaShop\PrestaShop\Adapter\Order\Repository\OrderRepository $orderRepository, private \PrestaShop\PrestaShop\Adapter\Order\Repository\OrderDetailRepository $orderDetailRepository, private \PrestaShop\PrestaShop\Adapter\LegacyContext $context, private \PrestaShop\PrestaShop\Adapter\Tools $tools)
    {
    }
    public function calculate(int $orderDetailId, int $quantity, bool $isTaxIncl = true): float
    {
    }
}
