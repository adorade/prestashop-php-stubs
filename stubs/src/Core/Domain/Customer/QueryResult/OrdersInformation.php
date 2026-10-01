<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult;

/**
 * Class CustomerOrders.
 */
class OrdersInformation
{
    /**
     * @param string $totalSpent
     * @param OrderInformation[] $validOrders
     * @param OrderInformation[] $invalidOrders
     */
    public function __construct($totalSpent, array $validOrders, array $invalidOrders)
    {
    }
    /**
     * @return OrderInformation[]
     */
    public function getValidOrders()
    {
    }
    /**
     * @return OrderInformation[]
     */
    public function getInvalidOrders()
    {
    }
    /**
     * @return string
     */
    public function getTotalSpent()
    {
    }
}
