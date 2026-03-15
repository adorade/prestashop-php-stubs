<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderMessage\Query;

/**
 * Get order message data for editing
 */
class GetOrderMessageForEditing
{
    /**
     * @param int $orderMessageId
     */
    public function __construct(int $orderMessageId)
    {
    }
    /**
     * @return OrderMessageId
     */
    public function getOrderMessageId(): \PrestaShop\PrestaShop\Core\Domain\OrderMessage\ValueObject\OrderMessageId
    {
    }
}
