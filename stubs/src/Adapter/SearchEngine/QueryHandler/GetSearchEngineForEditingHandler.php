<?php

namespace PrestaShop\PrestaShop\Adapter\SearchEngine\QueryHandler;

/**
 * Handles query what gets search engine for editing.
 */
final class GetSearchEngineForEditingHandler extends \PrestaShop\PrestaShop\Adapter\SearchEngine\AbstractSearchEngineHandler implements \PrestaShop\PrestaShop\Core\Domain\SearchEngine\QueryHandler\GetSearchEngineForEditingHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws SearchEngineException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SearchEngine\Query\GetSearchEngineForEditing $query): \PrestaShop\PrestaShop\Core\Domain\SearchEngine\QueryResult\SearchEngineForEditing
    {
    }
}
