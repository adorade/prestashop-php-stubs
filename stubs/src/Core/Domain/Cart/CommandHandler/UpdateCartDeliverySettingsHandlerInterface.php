<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler;

interface UpdateCartDeliverySettingsHandlerInterface
{
    /**
     * @param UpdateCartDeliverySettingsCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\UpdateCartDeliverySettingsCommand $command);
}
