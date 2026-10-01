<?php

namespace PrestaShop\PrestaShop\Adapter\Module\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetModuleInfosHandler implements \PrestaShop\PrestaShop\Core\Domain\Module\QueryHandler\GetModuleInfosHandlerInterface
{
    public function __construct(protected \PrestaShop\PrestaShop\Core\Module\ModuleRepository $moduleRepository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Module\Query\GetModuleInfos $query): \PrestaShop\PrestaShop\Core\Domain\Module\QueryResult\ModuleInfos
    {
    }
}
