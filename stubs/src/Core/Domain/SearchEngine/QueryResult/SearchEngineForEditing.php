<?php

namespace PrestaShop\PrestaShop\Core\Domain\SearchEngine\QueryResult;

/**
 * Transfers editable search engine data.
 */
class SearchEngineForEditing
{
    /**
     * @param SearchEngineId $searchEngineId
     * @param string $server
     * @param string $queryKey
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\SearchEngine\ValueObject\SearchEngineId $searchEngineId, string $server, string $queryKey)
    {
    }
    /**
     * @return SearchEngineId
     */
    public function getSearchEngineId(): \PrestaShop\PrestaShop\Core\Domain\SearchEngine\ValueObject\SearchEngineId
    {
    }
    /**
     * @return string
     */
    public function getServer(): string
    {
    }
    /**
     * @return string
     */
    public function getQueryKey(): string
    {
    }
}
