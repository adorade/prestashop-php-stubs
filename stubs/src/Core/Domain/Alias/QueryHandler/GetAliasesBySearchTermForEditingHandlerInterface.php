<?php

namespace PrestaShop\PrestaShop\Core\Domain\Alias\QueryHandler;

/**
 * Interface defines contract for GetAliasesBySearchTermForEditingHandler
 */
interface GetAliasesBySearchTermForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Alias\Query\GetAliasesBySearchTermForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Alias\QueryResult\AliasForEditing
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Alias\Query\GetAliasesBySearchTermForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Alias\QueryResult\AliasForEditing;
}
