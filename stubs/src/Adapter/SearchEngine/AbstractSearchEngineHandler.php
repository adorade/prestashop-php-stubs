<?php

namespace PrestaShop\PrestaShop\Adapter\SearchEngine;

abstract class AbstractSearchEngineHandler
{
    /**
     * Gets legacy search engine.
     *
     * @param SearchEngineId $searchEngineId
     *
     * @return SearchEngine
     *
     * @throws SearchEngineException
     */
    protected function getSearchEngine(\PrestaShop\PrestaShop\Core\Domain\SearchEngine\ValueObject\SearchEngineId $searchEngineId): \SearchEngine
    {
    }
}
