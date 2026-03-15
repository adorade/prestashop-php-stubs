<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturn\QueryResult;

class OrderReturnForEditing
{
    /**
     * OrderReturnForEditing constructor.
     *
     * @param int $orderReturnId
     * @param int $customerId
     * @param string $customerFirstName
     * @param string $customerLastName
     * @param int $orderId
     * @param DateTimeImmutable $orderDate
     * @param int $orderReturnStateId
     * @param string $question
     */
    public function __construct(int $orderReturnId, int $customerId, string $customerFirstName, string $customerLastName, int $orderId, \DateTimeImmutable $orderDate, int $orderReturnStateId, string $question)
    {
    }
    /**
     * @return int
     */
    public function getOrderReturnId(): int
    {
    }
    /**
     * @return int
     */
    public function getCustomerId(): int
    {
    }
    /**
     * @return int
     */
    public function getOrderId(): int
    {
    }
    /**
     * @return int
     */
    public function getOrderReturnStateId(): int
    {
    }
    /**
     * @return string
     */
    public function getQuestion(): string
    {
    }
    /**
     * @return string
     */
    public function getCustomerFullName(): string
    {
    }
    /**
     * @return string
     */
    public function getCustomerFirstName(): string
    {
    }
    /**
     * @return string
     */
    public function getCustomerLastName(): string
    {
    }
    /**
     * @return DateTimeImmutable
     */
    public function getOrderDate(): \DateTimeImmutable
    {
    }
}
