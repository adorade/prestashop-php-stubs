<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\CommandHandler;

/**
 * Defines contract for AddCarrierHandler
 */
interface AddCarrierHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Carrier\Command\AddCarrierCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Command\AddCarrierCommand $command): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId;
}
