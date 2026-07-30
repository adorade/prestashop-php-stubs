<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject;

/**
 * Stock identifier.
 */
class StockId
{
    /**
     * @param int $stockId
     *
     * @throws ProductStockConstraintException
     */
    public function __construct(int $stockId)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
