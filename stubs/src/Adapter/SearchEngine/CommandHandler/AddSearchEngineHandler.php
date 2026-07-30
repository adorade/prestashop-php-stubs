<?php

namespace PrestaShop\PrestaShop\Adapter\SearchEngine\CommandHandler;

/**
 * Handles command what is responsible for creating new search engine.
 */
final class AddSearchEngineHandler extends \PrestaShop\PrestaShop\Adapter\SearchEngine\AbstractSearchEngineHandler implements \PrestaShop\PrestaShop\Core\Domain\SearchEngine\CommandHandler\AddSearchEngineHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws SearchEngineException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SearchEngine\Command\AddSearchEngineCommand $command): \PrestaShop\PrestaShop\Core\Domain\SearchEngine\ValueObject\SearchEngineId
    {
    }
}
