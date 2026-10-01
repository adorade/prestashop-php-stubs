<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\QueryHandler;

/**
 * Defines contract for GetOrderShipmentsHandler.
 */
interface GetOrderShipmentsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shipment\Query\GetOrderShipments $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shipment\QueryResult\OrderShipment[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Query\GetOrderShipments $query);
}
