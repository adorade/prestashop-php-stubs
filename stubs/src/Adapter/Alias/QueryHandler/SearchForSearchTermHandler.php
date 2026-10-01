<?php

namespace PrestaShop\PrestaShop\Adapter\Alias\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class SearchForSearchTermHandler implements \PrestaShop\PrestaShop\Core\Domain\Alias\QueryHandler\SearchForSearchTermHandlerInterface
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Adapter\Alias\Repository\AliasRepository $aliasRepository)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Alias\Query\SearchForSearchTerm $query
     *
     * @return string[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Alias\Query\SearchForSearchTerm $query): array
    {
    }
}
