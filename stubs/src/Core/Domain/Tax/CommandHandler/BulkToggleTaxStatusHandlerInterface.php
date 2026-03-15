<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tax\CommandHandler;

/**
 * Defines contract for BulkToggleTaxStatus
 */
interface BulkToggleTaxStatusHandlerInterface
{
    /**
     * @param BulkToggleTaxStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tax\Command\BulkToggleTaxStatusCommand $command);
}
