<?php

namespace PrestaShop\PrestaShop\Core\Domain\Zone\CommandHandler;

/**
 * Defines contract for BulkToggleZoneStatusHandler
 */
interface BulkToggleZoneStatusHandlerInterface
{
    /**
     * @param BulkToggleZoneStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Zone\Command\BulkToggleZoneStatusCommand $command): void;
}
