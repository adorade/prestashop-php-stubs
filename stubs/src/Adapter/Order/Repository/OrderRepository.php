<?php

namespace PrestaShop\PrestaShop\Adapter\Order\Repository;

class OrderRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * Gets legacy Order
     *
     * @param OrderId $orderId
     *
     * @return Order
     *
     * @throws OrderException
     * @throws CoreException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId $orderId): \Order
    {
    }
}
