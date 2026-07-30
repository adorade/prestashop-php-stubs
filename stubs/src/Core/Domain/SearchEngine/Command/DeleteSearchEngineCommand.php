<?php

namespace PrestaShop\PrestaShop\Core\Domain\SearchEngine\Command;

/**
 * Deletes search engine.
 */
class DeleteSearchEngineCommand
{
    /**
     * @param int $searchEngineId
     *
     * @throws SearchEngineException
     */
    public function __construct(int $searchEngineId)
    {
    }
    /**
     * @return SearchEngineId
     */
    public function getSearchEngineId(): \PrestaShop\PrestaShop\Core\Domain\SearchEngine\ValueObject\SearchEngineId
    {
    }
}
