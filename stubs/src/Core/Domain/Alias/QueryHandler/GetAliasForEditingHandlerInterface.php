<?php

namespace PrestaShop\PrestaShop\Core\Domain\Alias\QueryHandler;

/**
 * Interface GetAliasForEditingHandlerInterface defines contract for GetAliasForEditingHandler
 */
interface GetAliasForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Alias\Query\GetAliasForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Alias\QueryResult\AliasForEditing
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Alias\Query\GetAliasForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Alias\QueryResult\AliasForEditing;
}
