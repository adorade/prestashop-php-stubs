<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

/**
 * Defines contract to handle @see BulkUpdateProductStatusCommand
 */
interface BulkUpdateProductStatusHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Command\BulkUpdateProductStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\BulkUpdateProductStatusCommand $command): void;
}
