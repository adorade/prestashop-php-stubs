<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\CommandHandler;

/**
 * Defines contract for EditCarrierHandler
 */
interface EditCarrierHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Carrier\Command\EditCarrierCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Command\EditCarrierCommand $command): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId;
}
