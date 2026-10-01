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
