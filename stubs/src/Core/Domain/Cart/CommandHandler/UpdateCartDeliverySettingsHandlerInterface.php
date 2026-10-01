<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler;

interface UpdateCartDeliverySettingsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Cart\Command\UpdateCartDeliverySettingsCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\UpdateCartDeliverySettingsCommand $command);
}
