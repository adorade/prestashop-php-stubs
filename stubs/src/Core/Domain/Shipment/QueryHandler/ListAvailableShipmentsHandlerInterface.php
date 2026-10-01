<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\QueryHandler;

interface ListAvailableShipmentsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shipment\Query\ListAvailableShipments $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shipment\QueryResult\ShipmentsForMerge[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Query\ListAvailableShipments $query);
}
