<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject;

/**
 * Holds value of out of stock type
 */
class OutOfStockType
{
    /**
     * Product is not available for order when out of stock.
     */
    public const OUT_OF_STOCK_NOT_AVAILABLE = 0;
    /**
     * Product is available for order even when out of stock.
     */
    public const OUT_OF_STOCK_AVAILABLE = 1;
    /**
     * Product availability when out of stock is define by shop settings.
     */
    public const OUT_OF_STOCK_DEFAULT = 2;
    public const ALLOWED_OUT_OF_STOCK_TYPES = [self::OUT_OF_STOCK_AVAILABLE, self::OUT_OF_STOCK_NOT_AVAILABLE, self::OUT_OF_STOCK_DEFAULT];
    /**
     * @param int $outOfStockType
     *
     * @throws ProductStockConstraintException
     */
    public function __construct(int $outOfStockType)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
