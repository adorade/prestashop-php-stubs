<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Command;

/**
 * Updates product details
 */
class UpdateProductsPositionsCommand
{
    /**
     * UpdateProductPositionCommand constructor.
     *
     * @param array $positions
     * @param int $categoryId
     */
    public function __construct(array $positions, int $categoryId)
    {
    }
    /**
     * @return RowPosition[]
     */
    public function getPositions(): array
    {
    }
    /**
     * @return CategoryId
     */
    public function getCategoryId(): \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId
    {
    }
}
