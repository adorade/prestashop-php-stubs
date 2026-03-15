<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderState\CommandHandler;

/**
 * Defines contract for BulkDeleteOrderStateHandler
 */
interface BulkDeleteOrderStateHandlerInterface
{
    /**
     * @param BulkDeleteOrderStateCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderState\Command\BulkDeleteOrderStateCommand $command): void;
}
