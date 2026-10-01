<?php

namespace PrestaShop\PrestaShop\Core\Domain\State\CommandHandler;

/**
 * Defines contract for BulkToggleStateStatusHandler
 */
interface BulkToggleStateStatusHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\State\Command\BulkToggleStateStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\State\Command\BulkToggleStateStatusCommand $command): void;
}
