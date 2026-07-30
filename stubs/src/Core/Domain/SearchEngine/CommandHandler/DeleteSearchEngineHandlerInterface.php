<?php

namespace PrestaShop\PrestaShop\Core\Domain\SearchEngine\CommandHandler;

/**
 * Defines contract for DeleteSearchEngineHandler.
 */
interface DeleteSearchEngineHandlerInterface
{
    /**
     * @param DeleteSearchEngineCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SearchEngine\Command\DeleteSearchEngineCommand $command): void;
}
