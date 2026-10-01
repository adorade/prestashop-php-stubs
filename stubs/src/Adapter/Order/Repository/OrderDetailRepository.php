<?php

namespace PrestaShop\PrestaShop\Adapter\Order\Repository;

class OrderDetailRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * Gets legacy Order detail
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject\OrderDetailId $orderDetailId
     *
     * @return \OrderDetail
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject\OrderDetailId $orderDetailId): \OrderDetail
    {
    }
}
