<?php

namespace PrestaShop\PrestaShop\Core\Domain\Module\CommandHandler;

/**
 * Defines contract for BulkToggleModuleStatusHandler
 */
interface BulkToggleModuleStatusHandlerInterface
{
    /**
     * @param BulkToggleModuleStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Module\Command\BulkToggleModuleStatusCommand $command): void;
}
