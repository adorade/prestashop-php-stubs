<?php

namespace PrestaShop\PrestaShop\Core\Domain\Hook\QueryHandler;

/**
 * Interface for service that handles getting hook status.
 */
interface GetHookStatusHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Hook\Query\GetHookStatus $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Hook\QueryResult\HookStatus
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Hook\Query\GetHookStatus $query);
}
