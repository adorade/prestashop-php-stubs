<?php

namespace PrestaShop\PrestaShop\Core\Domain\Alias\Command;

/**
 * Delete all aliases by given search term.
 */
class DeleteSearchTermAliasesCommand
{
    public function __construct(string $searchTerm)
    {
    }
    public function getSearchTerm(): \PrestaShop\PrestaShop\Core\Domain\Alias\ValueObject\SearchTerm
    {
    }
}
