<?php

namespace PrestaShop\PrestaShop\Core\Domain\SearchEngine\QueryHandler;

/**
 * Defines contract for GetSearchEngineForEditingHandler.
 */
interface GetSearchEngineForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\SearchEngine\Query\GetSearchEngineForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\SearchEngine\QueryResult\SearchEngineForEditing
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SearchEngine\Query\GetSearchEngineForEditing $query): \PrestaShop\PrestaShop\Core\Domain\SearchEngine\QueryResult\SearchEngineForEditing;
}
