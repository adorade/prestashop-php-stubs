<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\CommandHandler;

/**
 * Updates combination stock available using legacy object model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class UpdateCombinationStockAvailableHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Combination\CommandHandler\UpdateCombinationStockAvailableHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\CombinationStockUpdater $combinationStockUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Combination\Update\CombinationStockUpdater $combinationStockUpdater)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command\UpdateCombinationStockAvailableCommand $command): void
    {
    }
}
