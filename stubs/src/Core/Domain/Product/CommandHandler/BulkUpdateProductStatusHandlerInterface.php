<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

/**
 * Defines contract to handle @see BulkUpdateProductStatusCommand
 */
interface BulkUpdateProductStatusHandlerInterface
{
    /**
     * @param BulkUpdateProductStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\BulkUpdateProductStatusCommand $command): void;
}
