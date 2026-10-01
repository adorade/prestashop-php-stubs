<?php

namespace PrestaShop\PrestaShop\Core\Domain\State\CommandHandler;

/**
 * Defines contract for bulk update of states zone
 */
interface BulkUpdateStateZoneHandlerInterface
{
    /**
     * Handles command which updates zone for multiple states
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\State\Command\BulkUpdateStateZoneCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\State\Command\BulkUpdateStateZoneCommand $command): void;
}
