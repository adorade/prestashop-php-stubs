<?php

namespace PrestaShop\PrestaShop\Adapter\OrderMessage;

/**
 * Provides common methods for OrderMessage command/query handlers that uses object model
 *
 * @internal
 */
abstract class AbstractOrderMessageHandler
{
    /**
     * @param OrderMessageId $orderMessageId
     *
     * @return OrderMessage
     */
    protected function getOrderMessage(\PrestaShop\PrestaShop\Core\Domain\OrderMessage\ValueObject\OrderMessageId $orderMessageId): \OrderMessage
    {
    }
}
