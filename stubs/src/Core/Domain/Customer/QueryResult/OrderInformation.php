<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult;

/**
 * Class CustomerOrderInformation.
 */
class OrderInformation
{
    /**
     * @param int $orderId
     * @param string $orderPlacedDate
     * @param string $paymentMethodName
     * @param string $orderStatus
     * @param int $orderProductsCount
     * @param string $totalPaid
     */
    public function __construct($orderId, $orderPlacedDate, $paymentMethodName, $orderStatus, $orderProductsCount, $totalPaid)
    {
    }
    /**
     * @return int
     */
    public function getOrderId()
    {
    }
    /**
     * @return string
     */
    public function getOrderPlacedDate()
    {
    }
    /**
     * @return string
     */
    public function getPaymentMethodName()
    {
    }
    /**
     * @return string
     */
    public function getOrderStatus()
    {
    }
    /**
     * @return int
     */
    public function getOrderProductsCount()
    {
    }
    /**
     * @return string
     */
    public function getTotalPaid()
    {
    }
}
