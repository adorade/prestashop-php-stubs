<?php

namespace PrestaShop\PrestaShop\Core\Domain\Hook\QueryHandler;

/**
 * Interface for service that handles getting hook status.
 */
interface GetHookStatusHandlerInterface
{
    /**
     * @param GetHookStatus $query
     *
     * @return bool
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Hook\Query\GetHookStatus $query);
}
