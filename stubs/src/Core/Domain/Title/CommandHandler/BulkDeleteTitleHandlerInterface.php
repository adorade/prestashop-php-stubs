<?php

namespace PrestaShop\PrestaShop\Core\Domain\Title\CommandHandler;

/**
 * Defines contract for BulkDeleteTitleHandler
 */
interface BulkDeleteTitleHandlerInterface
{
    /**
     * @param BulkDeleteTitleCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Title\Command\BulkDeleteTitleCommand $command): void;
}
