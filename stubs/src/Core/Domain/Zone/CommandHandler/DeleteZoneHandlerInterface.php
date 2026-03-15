<?php

namespace PrestaShop\PrestaShop\Core\Domain\Zone\CommandHandler;

/**
 * Defines contract for DeleteZoneHandler
 */
interface DeleteZoneHandlerInterface
{
    /**
     * @param DeleteZoneCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Zone\Command\DeleteZoneCommand $command): void;
}
