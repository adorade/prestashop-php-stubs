<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject;

/**
 * Holds delta quantity for a product update along with a stock movement reason
 */
class StockModification
{
    /**
     * Builds class using delta quantity (delta means the quantity will be added up to the previous quantity)
     *
     * @param int $deltaQuantity
     *
     * @return self
     */
    public static function buildDeltaQuantity(int $deltaQuantity): self
    {
    }
    /**
     * Builds class using fixed quantity (fixed means the new quantity will replace the previous quantity)
     *
     * @param int $fixedQuantity
     *
     * @return self
     */
    public static function buildFixedQuantity(int $fixedQuantity): self
    {
    }
    /**
     * @return int|null
     */
    public function getDeltaQuantity(): ?int
    {
    }
    /**
     * @return int|null
     */
    public function getFixedQuantity(): ?int
    {
    }
}
