<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderMessage\Command;

/**
 * Delete given order message
 */
class DeleteOrderMessageCommand
{
    /**
     * @param int $orderMessageId
     */
    public function __construct(int $orderMessageId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\OrderMessage\ValueObject\OrderMessageId
     */
    public function getOrderMessageId(): \PrestaShop\PrestaShop\Core\Domain\OrderMessage\ValueObject\OrderMessageId
    {
    }
}
