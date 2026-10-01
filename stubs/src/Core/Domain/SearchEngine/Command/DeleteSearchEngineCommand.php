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
     * @throws \PrestaShop\PrestaShop\Core\Domain\SearchEngine\Exception\SearchEngineException
     */
    public function __construct(int $searchEngineId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\SearchEngine\ValueObject\SearchEngineId
     */
    public function getSearchEngineId(): \PrestaShop\PrestaShop\Core\Domain\SearchEngine\ValueObject\SearchEngineId
    {
    }
}
