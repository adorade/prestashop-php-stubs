<?php

namespace PrestaShop\PrestaShop\Core\Domain\SearchEngine\Command;

/**
 * Deletes search engines in bulk action.
 */
class BulkDeleteSearchEngineCommand
{
    /**
     * @param int[] $searchEngineIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\SearchEngine\Exception\SearchEngineException
     */
    public function __construct(array $searchEngineIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\SearchEngine\ValueObject\SearchEngineId[]
     */
    public function getSearchEngineIds(): array
    {
    }
}
