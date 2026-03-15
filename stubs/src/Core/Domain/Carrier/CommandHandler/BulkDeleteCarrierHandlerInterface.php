<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\CommandHandler;

/**
 * Defines contract for BulkDeleteCarrierHandler
 */
interface BulkDeleteCarrierHandlerInterface
{
    /**
     * @param BulkDeleteCarrierCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Command\BulkDeleteCarrierCommand $command);
}
