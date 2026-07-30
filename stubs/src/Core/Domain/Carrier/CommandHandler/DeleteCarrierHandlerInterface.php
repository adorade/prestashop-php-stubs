<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\CommandHandler;

/**
 * Defines contract for DeleteCarrierHandler
 */
interface DeleteCarrierHandlerInterface
{
    /**
     * @param DeleteCarrierCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Command\DeleteCarrierCommand $command);
}
