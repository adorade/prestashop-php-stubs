<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

/**
 * Defines contract to handle @see BulkDeleteProductCommand
 */
interface BulkDeleteProductHandlerInterface
{
    /**
     * @param BulkDeleteProductCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\BulkDeleteProductCommand $command): void;
}
