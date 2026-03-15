<?php

namespace PrestaShop\PrestaShop\Core\Domain\SearchEngine\ValueObject;

/**
 * Defines Search Engine ID with it's constraints.
 */
class SearchEngineId
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
     * @return int
     */
    public function getValue(): int
    {
    }
}
