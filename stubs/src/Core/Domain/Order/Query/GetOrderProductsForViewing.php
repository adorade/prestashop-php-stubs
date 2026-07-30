<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Query;

/**
 * Query for paginated order products
 */
class GetOrderProductsForViewing
{
    /**
     * Builds query for paginated results
     *
     * @param int $orderId
     * @param int $offset
     * @param int $limit
     * @param string $productsSorting
     *
     * @return GetOrderProductsForViewing
     *
     * @throws OrderException
     * @throws InvalidSortingException
     */
    public static function paginated(int $orderId, int $offset, int $limit, string $productsSorting = \PrestaShop\PrestaShop\Core\Domain\ValueObject\QuerySorting::ASC)
    {
    }
    /**
     * Builds query for getting all results
     *
     * @param int $orderId
     * @param string $productsSorting
     *
     * @return GetOrderProductsForViewing
     *
     * @throws OrderException
     * @throws InvalidSortingException
     */
    public static function all(int $orderId, string $productsSorting = \PrestaShop\PrestaShop\Core\Domain\ValueObject\QuerySorting::ASC)
    {
    }
    /**
     * @return OrderId
     */
    public function getOrderId(): \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
    {
    }
    /**
     * @return int|null
     */
    public function getOffset(): ?int
    {
    }
    /**
     * @return int|null
     */
    public function getLimit(): ?int
    {
    }
    /**
     * @return QuerySorting
     */
    public function getProductsSorting(): \PrestaShop\PrestaShop\Core\Domain\ValueObject\QuerySorting
    {
    }
}
