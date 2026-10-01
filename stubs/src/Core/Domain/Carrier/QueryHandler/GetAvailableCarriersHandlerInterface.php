<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\QueryHandler;

/**
 * Defines contract for GetAvailableCarriersHandler.
 */
interface GetAvailableCarriersHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Carrier\Query\GetAvailableCarriers $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult\GetCarriersResult
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Query\GetAvailableCarriers $query);
}
