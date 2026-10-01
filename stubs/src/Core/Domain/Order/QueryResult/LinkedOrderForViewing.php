<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

/**
 * Used in order page view to display 'linked orders': orders linked
 * to the order being displayed
 *
 * Two orders are linked if they are the result of an Order Split
 */
class LinkedOrderForViewing
{
    /**
     * @param int $orderId
     * @param string $statusName
     * @param string $amount
     */
    public function __construct(int $orderId, string $statusName, string $amount)
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
    public function getStatusName(): string
    {
    }
    /**
     * @return string
     */
    public function getAmount(): string
    {
    }
}
