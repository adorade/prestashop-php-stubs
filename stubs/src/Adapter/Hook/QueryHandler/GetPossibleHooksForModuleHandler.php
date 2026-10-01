<?php

namespace PrestaShop\PrestaShop\Adapter\Hook\QueryHandler;

/**
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetPossibleHooksForModuleHandler implements \PrestaShop\PrestaShop\Core\Domain\Hook\QueryHandler\GetPossibleHooksForModuleHandlerInterface
{
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Hook\QueryResult\HookableInfo[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Hook\Query\GetPossibleHooksForModule $query): array
    {
    }
}
