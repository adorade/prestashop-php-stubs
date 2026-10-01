<?php

namespace PrestaShop\PrestaShop\Core\Domain\Hook\QueryHandler;

interface GetHookHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Hook\Query\GetHook $query);
}
