<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\QueryHandler;

interface GetCarriersForProductHandlerInterface
{
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult\CarrierSummary[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Query\GetCarriersForProduct $query);
}
