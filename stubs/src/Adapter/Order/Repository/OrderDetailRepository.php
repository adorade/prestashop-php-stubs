<?php

namespace PrestaShop\PrestaShop\Adapter\Order\Repository;

class OrderDetailRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    public function __construct(private readonly ?\Doctrine\DBAL\Connection $connection = null, private ?string $dbPrefix = null)
    {
    }
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
    public function findByOrderIdAndProductId(\PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId $orderId, \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, ?\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId): ?\OrderDetail
    {
    }
}
