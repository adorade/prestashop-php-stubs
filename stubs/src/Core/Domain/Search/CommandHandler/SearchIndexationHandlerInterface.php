<?php

namespace PrestaShop\PrestaShop\Core\Domain\Search\CommandHandler;

/**
 * Defines contract for search indexation handler.
 */
interface SearchIndexationHandlerInterface
{
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Search\Exception\SearchIndexationException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Search\Command\SearchIndexationCommand $command): void;
}
