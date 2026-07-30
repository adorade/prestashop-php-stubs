<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderMessage\QueryResult;

/**
 * Transfers current order message data that can be edited
 */
class EditableOrderMessage
{
    /**
     * @param OrderMessageId $orderMessageId
     * @param string[] $localizedName
     * @param string[] $localizedMessage
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\OrderMessage\ValueObject\OrderMessageId $orderMessageId, array $localizedName, array $localizedMessage)
    {
    }
    /**
     * @return OrderMessageId
     */
    public function getOrderMessageId(): \PrestaShop\PrestaShop\Core\Domain\OrderMessage\ValueObject\OrderMessageId
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedName(): array
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedMessage(): array
    {
    }
}
