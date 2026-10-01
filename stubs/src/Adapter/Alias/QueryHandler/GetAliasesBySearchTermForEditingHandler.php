<?php

namespace PrestaShop\PrestaShop\Adapter\Alias\QueryHandler;

/**
 * Handle the query @see GetAliasesBySearchTermForEditing using legacy ObjectModel
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetAliasesBySearchTermForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Alias\QueryHandler\GetAliasesBySearchTermForEditingHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Alias\Repository\AliasRepository $aliasRepository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Alias\Query\GetAliasesBySearchTermForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Alias\QueryResult\AliasForEditing
    {
    }
}
