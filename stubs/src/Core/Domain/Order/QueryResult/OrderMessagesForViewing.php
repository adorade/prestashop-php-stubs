<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

class OrderMessagesForViewing
{
    /**
     * @param OrderMessageForViewing[] $messages
     * @param int $total
     */
    public function __construct(array $messages, int $total)
    {
    }
    /**
     * @return OrderMessageForViewing[]
     */
    public function getMessages(): array
    {
    }
    /**
     * @return int
     */
    public function getTotal(): int
    {
    }
}
