<?php

namespace PrestaShop\PrestaShop\Core\Domain\SearchEngine\Command;

/**
 * Edits given search engine with provided data.
 */
class EditSearchEngineCommand
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
    /**
     * @return string|null
     */
    public function getServer(): ?string
    {
    }
    /**
     * @param string|null $server
     *
     * @return self
     */
    public function setServer(?string $server): self
    {
    }
    /**
     * @return string|null
     */
    public function getQueryKey(): ?string
    {
    }
    /**
     * @param string|null $queryKey
     *
     * @return self
     */
    public function setQueryKey(?string $queryKey): self
    {
    }
}
