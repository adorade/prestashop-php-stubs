<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Query;

/**
 * Get order for view in Back Office
 */
class GetOrderForViewing
{
    /**
     * @param int $orderId
     * @param string $productsSorting
     *
     * @throws OrderException
     * @throws InvalidSortingException
     */
    public function __construct(int $orderId, string $productsSorting = \PrestaShop\PrestaShop\Core\Domain\ValueObject\QuerySorting::ASC)
    {
    }
    /**
     * @return OrderId
     */
    public function getOrderId(): \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
    {
    }
    /**
     * @return QuerySorting
     */
    public function getProductsSorting(): \PrestaShop\PrestaShop\Core\Domain\ValueObject\QuerySorting
    {
    }
}
