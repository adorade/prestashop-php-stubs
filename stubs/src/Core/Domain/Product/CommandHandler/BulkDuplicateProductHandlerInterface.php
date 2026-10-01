<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

/**
 * Defines contract to handle @see BulkDuplicateProductCommand
 */
interface BulkDuplicateProductHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Command\BulkDuplicateProductCommand $command
     *
     * @return array<\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId>
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\BulkDuplicateProductCommand $command): array;
}
