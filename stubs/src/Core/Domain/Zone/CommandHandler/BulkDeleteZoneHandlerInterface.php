<?php

namespace PrestaShop\PrestaShop\Core\Domain\Zone\CommandHandler;

/**
 * Defines contract for BulkDeleteZoneHandler
 */
interface BulkDeleteZoneHandlerInterface
{
    /**
     * @param BulkDeleteZoneCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Zone\Command\BulkDeleteZoneCommand $command): void;
}
