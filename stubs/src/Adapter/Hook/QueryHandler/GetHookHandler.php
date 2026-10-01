<?php

namespace PrestaShop\PrestaShop\Adapter\Hook\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetHookHandler implements \PrestaShop\PrestaShop\Core\Domain\Hook\QueryHandler\GetHookHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Hook\Query\GetHook $query)
    {
    }
}
