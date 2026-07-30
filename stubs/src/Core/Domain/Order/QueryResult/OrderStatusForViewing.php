<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

class OrderStatusForViewing
{
    /**
     * @param int $orderHistoryId
     * @param int $orderStatusId
     * @param string $name
     * @param string $color
     * @param DateTimeImmutable $createdAt
     * @param bool $withEmail
     * @param string|null $employeeFirstName
     * @param string|null $employeeLastName
     */
    public function __construct(int $orderHistoryId, int $orderStatusId, string $name, string $color, \DateTimeImmutable $createdAt, bool $withEmail, ?string $employeeFirstName, ?string $employeeLastName)
    {
    }
    /**
     * @return int
     */
    public function getOrderHistoryId(): int
    {
    }
    /**
     * @return int
     */
    public function getOrderStatusId(): int
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @return string
     */
    public function getColor(): string
    {
    }
    /**
     * @return DateTimeImmutable
     */
    public function getCreatedAt(): \DateTimeImmutable
    {
    }
    /**
     * @return bool
     */
    public function withEmail(): bool
    {
    }
    /**
     * @return string|null
     */
    public function getEmployeeFirstName(): ?string
    {
    }
    /**
     * @return string|null
     */
    public function getEmployeeLastName(): ?string
    {
    }
}
