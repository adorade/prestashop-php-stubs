<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\CommandHandler;

interface MergeProductsToShipmentHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shipment\Command\MergeProductsToShipment $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Command\MergeProductsToShipment $command);
}
