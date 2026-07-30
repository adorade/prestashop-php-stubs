<?php

namespace PrestaShop\PrestaShop\Core\Domain\Zone\CommandHandler;

/**
 * Defines contract for EditZoneHandler
 */
interface EditZoneHandlerInterface
{
    /**
     * @param EditZoneCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Zone\Command\EditZoneCommand $command): void;
}
