<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\QueryHandler;

/**
 * Defines contract for GetShipmentForViewingHandler.
 */
interface GetShipmentsForOrderDetailHandlerInterface
{
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Shipment\QueryResult\ShipmentForOrderDetail[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Query\GetShipmentsForOrderDetail $query);
}
