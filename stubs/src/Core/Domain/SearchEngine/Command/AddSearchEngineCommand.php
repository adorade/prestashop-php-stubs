<?php

namespace PrestaShop\PrestaShop\Core\Domain\SearchEngine\Command;

/**
 * Adds new search engine with provided data.
 */
class AddSearchEngineCommand
{
    /**
     * @param string $server
     * @param string $queryKey
     */
    public function __construct(string $server, string $queryKey)
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
