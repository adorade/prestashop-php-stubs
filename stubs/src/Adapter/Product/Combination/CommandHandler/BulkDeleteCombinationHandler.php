<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\CommandHandler;

/**
 * Deletes multiple combinations using legacy object model
 */
class BulkDeleteCombinationHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Combination\CommandHandler\BulkDeleteCombinationHandlerInterface
{
    /**
     * @param CombinationDeleter $combinationDeleter
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Combination\Update\CombinationDeleter $combinationDeleter)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command\BulkDeleteCombinationCommand $command): void
    {
    }
}
