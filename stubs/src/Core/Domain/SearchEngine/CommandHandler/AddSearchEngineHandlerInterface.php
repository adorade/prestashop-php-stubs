<?php

namespace PrestaShop\PrestaShop\Core\Domain\SearchEngine\CommandHandler;

/**
 * Defines contract for AddSearchEngineHandler.
 */
interface AddSearchEngineHandlerInterface
{
    /**
     * @param AddSearchEngineCommand $command
     *
     * @return SearchEngineId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SearchEngine\Command\AddSearchEngineCommand $command): \PrestaShop\PrestaShop\Core\Domain\SearchEngine\ValueObject\SearchEngineId;
}
