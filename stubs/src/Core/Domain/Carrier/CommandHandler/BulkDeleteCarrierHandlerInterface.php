<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\CommandHandler;

/**
 * Defines contract for BulkDeleteCarrierHandler
 */
interface BulkDeleteCarrierHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Carrier\Command\BulkDeleteCarrierCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Command\BulkDeleteCarrierCommand $command);
}
