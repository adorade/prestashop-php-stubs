<?php

namespace PrestaShop\PrestaShop\Core\Domain\Alias\Command;

/**
 * Adds new search term with given aliases
 */
class AddSearchTermAliasesCommand
{
    /**
     * @param string $searchTerm
     * @param array $aliases
     */
    public function __construct(array $aliases, string $searchTerm)
    {
    }
    /**
     * @return array{
     *   array{
     *     alias: string,
     *     active: bool,
     *   }
     * }
     */
    public function getAliases(): array
    {
    }
    /**
     * @return string
     */
    public function getSearchTerm(): string
    {
    }
}
