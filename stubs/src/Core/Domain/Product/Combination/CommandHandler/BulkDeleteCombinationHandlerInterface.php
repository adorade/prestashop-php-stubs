<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\CommandHandler;

/**
 * Defines contract to handle @see BulkDeleteCombinationCommand
 */
interface BulkDeleteCombinationHandlerInterface
{
    /**
     * @param BulkDeleteCombinationCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command\BulkDeleteCombinationCommand $command): void;
}
