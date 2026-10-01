<?php

namespace PrestaShop\PrestaShop\Core\Order;

interface OrderSiblingProviderInterface
{
    /**
     * @param int $orderId
     *
     * @return int returns previous order id or 0 if it does not exist
     */
    public function getNextOrderId(int $orderId): int;
    /**
     * @param int $orderId
     *
     * @return int returns next order id or 0 if it does not exist
     */
    public function getPreviousOrderId(int $orderId): int;
}
