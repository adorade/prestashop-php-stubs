<?php

namespace PrestaShop\PrestaShop\Core\Domain\Alias\QueryHandler;

/**
 * Interface SearchAliasesForAssociationHandlerInterface defines contract for SearchAliasesForAssociationHandler
 */
interface SearchForSearchTermHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Alias\Query\SearchForSearchTerm $query
     *
     * @return string[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Alias\Query\SearchForSearchTerm $query): array;
}
