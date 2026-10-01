<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\QueryHandler;

interface ListAvailableShipmentsForProductHandlerInterface
{
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Shipment\QueryResult\ShipmentsForProduct[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Query\ListAvailableShipmentsForProduct $query);
}
