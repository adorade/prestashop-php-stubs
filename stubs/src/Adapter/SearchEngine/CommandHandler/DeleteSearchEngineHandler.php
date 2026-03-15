<?php

namespace PrestaShop\PrestaShop\Adapter\SearchEngine\CommandHandler;

/**
 * Handles command that deletes Search Engine.
 */
final class DeleteSearchEngineHandler extends \PrestaShop\PrestaShop\Adapter\SearchEngine\AbstractSearchEngineHandler implements \PrestaShop\PrestaShop\Core\Domain\SearchEngine\CommandHandler\DeleteSearchEngineHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws SearchEngineException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SearchEngine\Command\DeleteSearchEngineCommand $command): void
    {
    }
}
