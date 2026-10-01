<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\CommandHandler;

/**
 * Defines contract for SwitchShipmentCarrierHandler
 */
interface SwitchShipmentCarrierHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shipment\Command\SwitchShipmentCarrierCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Command\SwitchShipmentCarrierCommand $command): void;
}
