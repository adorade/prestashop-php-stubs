<?php

namespace PrestaShop\PrestaShop\Adapter\Order\Repository;

class OrderRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * Gets legacy Order
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId $orderId
     *
     * @return \Order
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Order\Exception\OrderException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId $orderId): \Order
    {
    }
}
