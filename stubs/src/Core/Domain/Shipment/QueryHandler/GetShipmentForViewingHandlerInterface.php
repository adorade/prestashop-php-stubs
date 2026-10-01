<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\QueryHandler;

/**
 * Defines contract for GetShipmentForViewingHandler.
 */
interface GetShipmentForViewingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shipment\Query\GetShipmentForViewing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shipment\QueryResult\ShipmentForViewing
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Query\GetShipmentForViewing $query);
}
