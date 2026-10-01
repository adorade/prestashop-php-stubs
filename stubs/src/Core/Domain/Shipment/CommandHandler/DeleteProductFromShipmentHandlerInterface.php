<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\CommandHandler;

interface DeleteProductFromShipmentHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shipment\Command\DeleteProductFromShipment $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Command\DeleteProductFromShipment $command): void;
}
