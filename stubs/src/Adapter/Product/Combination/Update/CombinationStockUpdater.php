<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\Update;

/**
 * Updates stock for product combination
 */
class CombinationStockUpdater
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\StockAvailableRepository $stockAvailableRepository, \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository, \PrestaShop\PrestaShop\Adapter\Product\Stock\Repository\MovementReasonRepository $movementReasonRepository, \PrestaShop\PrestaShop\Core\Stock\StockManager $stockManager, \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher)
    {
    }
    /**
     * @param CombinationId $combinationId
     * @param CombinationStockProperties $properties
     */
    public function update(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\CombinationStockProperties $properties, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
}
