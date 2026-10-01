<?php

namespace PrestaShop\PrestaShop\Core\Domain\Alias\Query;

/**
 * Class SearchAliasesForAssociation is responsible for searching aliases with particular search terms.
 */
class SearchForSearchTerm
{
    public const DEFAULT_LIMIT = 20;
    /**
     * @throws \PrestaShop\PrestaShop\Core\Exception\InvalidArgumentException
     */
    public function __construct(string $searchTerm, ?int $limit = null)
    {
    }
    /**
     * @return string
     */
    public function getSearchTerm(): string
    {
    }
    /**
     * @return int|null
     */
    public function getLimit(): ?int
    {
    }
}
