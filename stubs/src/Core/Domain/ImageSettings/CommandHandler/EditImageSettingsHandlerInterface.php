<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\CommandHandler;

/**
 * Defines contract for EditImageSettingsHandler
 */
interface EditImageSettingsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\ImageSettings\Command\EditImageSettingsCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ImageSettings\Command\EditImageSettingsCommand $command): void;
}
