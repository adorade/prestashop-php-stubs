<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\CommandHandler;

/**
 * Updates combination stock available using legacy object model
 */
class UpdateCombinationStockAvailableHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Combination\CommandHandler\UpdateCombinationStockAvailableHandlerInterface
{
    /**
     * @param CombinationStockUpdater $combinationStockUpdater
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
