<?php

namespace PrestaShop\PrestaShop\Core\Domain\Hook\QueryHandler;

interface GetPossibleHooksForModuleHandlerInterface
{
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Hook\QueryResult\HookableInfo[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Hook\Query\GetPossibleHooksForModule $query): array;
}
