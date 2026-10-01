<?php

namespace PrestaShop\PrestaShop\Core\Domain\Zone\CommandHandler;

/**
 * Defines contract for EditZoneHandler
 */
interface EditZoneHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Zone\Command\EditZoneCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Zone\Command\EditZoneCommand $command): void;
}
