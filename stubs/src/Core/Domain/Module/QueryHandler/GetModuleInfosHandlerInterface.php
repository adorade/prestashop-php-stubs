<?php

namespace PrestaShop\PrestaShop\Core\Domain\Module\QueryHandler;

interface GetModuleInfosHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Module\Query\GetModuleInfos $query): \PrestaShop\PrestaShop\Core\Domain\Module\QueryResult\ModuleInfos;
}
