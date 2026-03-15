<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Update\Filler;

/**
 * Fills product properties related to stock. But just the ones in Product entity and not the ones in StockAvailable.
 * For properties like quantity, out_of_stock and location @see UpdateProductStockAvailableCommand
 */
class StockInformationFiller implements \PrestaShop\PrestaShop\Adapter\Product\Update\Filler\ProductFillerInterface
{
    /**
     * @param Product $product
     * @param UpdateProductCommand $command
     *
     * @return string[]|array<string, int[]>
     */
    public function fillUpdatableProperties(\Product $product, \PrestaShop\PrestaShop\Core\Domain\Product\Command\UpdateProductCommand $command): array
    {
    }
}
