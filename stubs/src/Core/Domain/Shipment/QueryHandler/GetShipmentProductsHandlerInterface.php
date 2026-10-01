<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\QueryHandler;

/**
 * Defines contract for GetShipmentProductsForViewingHandler.
 */
interface GetShipmentProductsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shipment\Query\GetShipmentProducts $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shipment\QueryResult\OrderShipmentProduct[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Query\GetShipmentProducts $query);
}
