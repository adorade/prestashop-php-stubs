<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tax\CommandHandler;

/**
 * Defines contract for BulkDeleteTaxHandler
 */
interface BulkDeleteTaxHandlerInterface
{
    /**
     * @param BulkDeleteTaxCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tax\Command\BulkDeleteTaxCommand $command);
}
