<?php

namespace PrestaShop\PrestaShop\Core\Domain\SearchEngine\CommandHandler;

/**
 * Defines contract for EditSearchEngineHandler.
 */
interface EditSearchEngineHandlerInterface
{
    /**
     * @param EditSearchEngineCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SearchEngine\Command\EditSearchEngineCommand $command): void;
}
