<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

class OrderReturnForViewing
{
    /**
     * @param int $idOrderReturn
     * @param int $orderInvoiceId
     * @param DateTimeImmutable $date
     * @param string $type
     * @param string $stateName
     * @param string $orderReturnNumber
     */
    public function __construct(int $idOrderReturn, int $orderInvoiceId, \DateTimeImmutable $date, string $type, string $stateName, string $orderReturnNumber)
    {
    }
    /**
     * @return int
     */
    public function getOrderInvoiceId(): int
    {
    }
    /**
     * @return DateTimeImmutable
     */
    public function getDate(): \DateTimeImmutable
    {
    }
    /**
     * @return string
     */
    public function getType(): string
    {
    }
    /**
     * @return string
     */
    public function getStateName(): string
    {
    }
    /**
     * @return string
     */
    public function getOrderReturnNumber(): string
    {
    }
    /**
     * @return int
     */
    public function getIdOrderReturn(): int
    {
    }
}
