<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment;

interface ShipmentTotalsCalculatorInterface
{
    public function calculate(int $orderDetailId, int $quantity, bool $isTaxIncl): float;
}
