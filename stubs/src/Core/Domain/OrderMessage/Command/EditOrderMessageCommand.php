<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderMessage\Command;

/**
 * Edit given order message
 */
class EditOrderMessageCommand
{
    /**
     * @param int $orderMessageId
     * @param string[]|null $localizedName Array of localized name or null if name should not be edited
     * @param string[]|null $localizedMessage Array of localized message or null if message should not be edited
     */
    public function __construct(int $orderMessageId, array $localizedName = null, array $localizedMessage = null)
    {
    }
    /**
     * @return OrderMessageId
     */
    public function getOrderMessageId(): \PrestaShop\PrestaShop\Core\Domain\OrderMessage\ValueObject\OrderMessageId
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedName(): ?array
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedMessage(): ?array
    {
    }
}
