<?php

namespace PrestaShop\PrestaShop\Core\Domain\State\CommandHandler;

/**
 * Defines contract for BulkDeleteStateHandler
 */
interface BulkDeleteStateHandlerInterface
{
    /**
     * @param BulkDeleteStateCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\State\Command\BulkDeleteStateCommand $command): void;
}
