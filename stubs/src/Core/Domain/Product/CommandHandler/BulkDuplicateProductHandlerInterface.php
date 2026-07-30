<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

/**
 * Defines contract to handle @see BulkDuplicateProductCommand
 */
interface BulkDuplicateProductHandlerInterface
{
    /**
     * @param BulkDuplicateProductCommand $command
     *
     * @return array<ProductId>
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\BulkDuplicateProductCommand $command): array;
}
