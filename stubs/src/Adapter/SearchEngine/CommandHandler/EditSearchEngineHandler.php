<?php

namespace PrestaShop\PrestaShop\Adapter\SearchEngine\CommandHandler;

/**
 * Handles command what edits search engine.
 */
final class EditSearchEngineHandler extends \PrestaShop\PrestaShop\Adapter\SearchEngine\AbstractSearchEngineHandler implements \PrestaShop\PrestaShop\Core\Domain\SearchEngine\CommandHandler\EditSearchEngineHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws SearchEngineException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SearchEngine\Command\EditSearchEngineCommand $command): void
    {
    }
}
