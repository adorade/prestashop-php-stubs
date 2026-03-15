<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\CommandHandler;

/**
 * Defines contract for BulkToggleCarrierStatusHandler
 */
interface BulkToggleCarrierStatusHandlerInterface
{
    /**
     * @param BulkToggleCarrierStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Command\BulkToggleCarrierStatusCommand $command);
}
