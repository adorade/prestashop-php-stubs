<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

class OrderMessageForViewing
{
    /**
     * @param int $messageId
     * @param string $message
     * @param OrderMessageDateForViewing $messageDate
     * @param int $employeeId
     * @param bool $isCurrentEmployeesMessage
     * @param string $employeeFirstName
     * @param string $employeeLastName
     * @param string $customerFirstName
     * @param string $customerLastName
     * @param bool $isPrivate
     */
    public function __construct(int $messageId, string $message, \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderMessageDateForViewing $messageDate, int $employeeId, bool $isCurrentEmployeesMessage, ?string $employeeFirstName, ?string $employeeLastName, string $customerFirstName, string $customerLastName, bool $isPrivate)
    {
    }
    /**
     * @return int
     */
    public function getMessageId(): int
    {
    }
    /**
     * @return string
     */
    public function getMessage(): string
    {
    }
    /**
     * @return OrderMessageDateForViewing
     */
    public function getMessageDate(): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderMessageDateForViewing
    {
    }
    /**
     * @return string
     */
    public function getEmployeeFirstName(): ?string
    {
    }
    /**
     * @return string
     */
    public function getEmployeeLastName(): ?string
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
     * @return int
     */
    public function getEmployeeId(): int
    {
    }
    /**
     * @return bool
     */
    public function isCurrentEmployeesMessage(): bool
    {
    }
    /**
     * @return bool
     */
    public function isPrivate(): bool
    {
    }
}
