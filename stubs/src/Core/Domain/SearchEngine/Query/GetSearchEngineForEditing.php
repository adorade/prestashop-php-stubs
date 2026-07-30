<?php

namespace PrestaShop\PrestaShop\Core\Domain\SearchEngine\Query;

/**
 * Gets search engine for editing in Back Office.
 */
class GetSearchEngineForEditing
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
