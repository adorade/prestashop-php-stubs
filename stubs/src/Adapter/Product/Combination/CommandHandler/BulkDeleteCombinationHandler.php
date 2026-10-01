<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\CommandHandler;

/**
 * Deletes multiple combinations using legacy object model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class BulkDeleteCombinationHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Combination\CommandHandler\BulkDeleteCombinationHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\CombinationDeleter $combinationDeleter
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
