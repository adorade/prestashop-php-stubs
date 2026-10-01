<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\CommandHandler;

interface AddProductToShipmentHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Command\AddProductToShipment $command): void;
}
