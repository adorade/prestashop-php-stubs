<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\Update\Filler;

/**
 * Fills combination properties related to stock. But just the ones in Combination entity and not the ones in StockAvailable.
 * For properties like quantity, out_of_stock and location @see UpdateCombinationStockAvailableCommand
 */
class StockInformationFiller implements \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\Filler\CombinationFillerInterface
{
    /**
     * {@inheritDoc}
     */
    public function fillUpdatableProperties(\Combination $combination, \PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command\UpdateCombinationCommand $command): array
    {
    }
}
