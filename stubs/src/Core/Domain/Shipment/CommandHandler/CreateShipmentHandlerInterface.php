<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\CommandHandler;

interface CreateShipmentHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Command\CreateShipment $command): int;
}
