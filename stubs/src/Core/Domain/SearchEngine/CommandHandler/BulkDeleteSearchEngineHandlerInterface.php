<?php

namespace PrestaShop\PrestaShop\Core\Domain\SearchEngine\CommandHandler;

/**
 * Defines contract for BulkDeleteSearchEngineHandler.
 */
interface BulkDeleteSearchEngineHandlerInterface
{
    /**
     * @param BulkDeleteSearchEngineCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SearchEngine\Command\BulkDeleteSearchEngineCommand $command): void;
}
