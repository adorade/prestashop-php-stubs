<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult;

/**
 * Holds data of summarized order
 */
class OrderSummary
{
    /**
     * OrderForOrderCreation constructor.
     *
     * @param int $orderId
     * @param string $orderPlacedDate
     * @param string $paymentMethodName
     * @param string $orderStatus
     * @param int $orderProductsCount
     * @param string $totalPaid
     */
    public function __construct(int $orderId, string $orderPlacedDate, string $paymentMethodName, string $orderStatus, int $orderProductsCount, string $totalPaid)
    {
    }
    /**
     * @return int
     */
    public function getOrderId(): int
    {
    }
    /**
     * @return string
     */
    public function getOrderPlacedDate(): string
    {
    }
    /**
     * @return string
     */
    public function getPaymentMethodName(): string
    {
    }
    /**
     * @return string
     */
    public function getOrderStatus(): string
    {
    }
    /**
     * @return int
     */
    public function getOrderProductsCount(): int
    {
    }
    /**
     * @return string
     */
    public function getTotalPaid(): string
    {
    }
}
