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
     * @throws SearchEngineException
     */
    public function __construct(array $searchEngineIds)
    {
    }
    /**
     * @return SearchEngineId[]
     */
    public function getSearchEngineIds(): array
    {
    }
}
