<?php

namespace PrestaShop\PrestaShop\Core\Domain\SearchEngine\QueryHandler;

/**
 * Defines contract for GetSearchEngineForEditingHandler.
 */
interface GetSearchEngineForEditingHandlerInterface
{
    /**
     * @param GetSearchEngineForEditing $query
     *
     * @return SearchEngineForEditing
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SearchEngine\Query\GetSearchEngineForEditing $query): \PrestaShop\PrestaShop\Core\Domain\SearchEngine\QueryResult\SearchEngineForEditing;
}
