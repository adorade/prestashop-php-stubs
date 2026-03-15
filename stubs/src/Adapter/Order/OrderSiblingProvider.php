<?php

namespace PrestaShop\PrestaShop\Adapter\Order;

class OrderSiblingProvider implements \PrestaShop\PrestaShop\Core\Order\OrderSiblingProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function getNextOrderId(int $orderId): int
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getPreviousOrderId(int $orderId): int
    {
    }
}
