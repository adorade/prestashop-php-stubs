<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderMessage\Command;

/**
 * Add new order message
 */
class AddOrderMessageCommand
{
    /**
     * @param string[] $localizedName
     * @param string[] $localizedMessage
     */
    public function __construct(array $localizedName, array $localizedMessage)
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
