<?php

namespace PrestaShop\PrestaShop\Adapter\Order\Repository;

class OrderRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    public function __construct(private readonly \Doctrine\DBAL\Connection $connection, private string $dbPrefix)
    {
    }
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
    /**
     * Get Order by cartId
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId $cartId
     *
     * @return \Order
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Order\Exception\OrderException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Order\Exception\OrderNotFoundException
     * @throws \Doctrine\DBAL\Exception
     */
    public function getByCartId(\PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId $cartId): \Order
    {
    }
}
