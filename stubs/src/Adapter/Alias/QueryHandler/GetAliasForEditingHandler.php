<?php

namespace PrestaShop\PrestaShop\Adapter\Alias\QueryHandler;

/**
 * Handles the query @see GetAliasForEditing using legacy ObjectModel
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetAliasForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Alias\QueryHandler\GetAliasForEditingHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Alias\Repository\AliasRepository $aliasRepository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Alias\Query\GetAliasForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Alias\QueryResult\AliasForEditing
    {
    }
}
