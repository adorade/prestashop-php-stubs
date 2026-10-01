<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\QueryHandler;

/**
 * Defines contract for GetShipmentForEditingHandlerInterface.
 */
interface GetShipmentForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shipment\Query\GetShipmentForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shipment\QueryResult\ShipmentForEditing
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Query\GetShipmentForEditing $query);
}
