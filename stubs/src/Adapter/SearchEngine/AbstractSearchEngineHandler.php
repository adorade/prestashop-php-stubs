<?php

namespace PrestaShop\PrestaShop\Adapter\SearchEngine;

abstract class AbstractSearchEngineHandler
{
    /**
     * Gets legacy search engine.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\SearchEngine\ValueObject\SearchEngineId $searchEngineId
     *
     * @return \SearchEngine
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\SearchEngine\Exception\SearchEngineException
     */
    protected function getSearchEngine(\PrestaShop\PrestaShop\Core\Domain\SearchEngine\ValueObject\SearchEngineId $searchEngineId): \SearchEngine
    {
    }
}
