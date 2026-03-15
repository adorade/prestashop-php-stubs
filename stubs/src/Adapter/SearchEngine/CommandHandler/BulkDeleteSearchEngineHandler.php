<?php

namespace PrestaShop\PrestaShop\Adapter\SearchEngine\CommandHandler;

/**
 * Handles command that deletes Search Engines in bulk action.
 */
final class BulkDeleteSearchEngineHandler extends \PrestaShop\PrestaShop\Adapter\SearchEngine\AbstractSearchEngineHandler implements \PrestaShop\PrestaShop\Core\Domain\SearchEngine\CommandHandler\BulkDeleteSearchEngineHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws SearchEngineException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SearchEngine\Command\BulkDeleteSearchEngineCommand $command): void
    {
    }
}
