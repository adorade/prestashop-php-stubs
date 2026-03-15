<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Pack\ValueObject;

/**
 * Holds value of pack stock type
 */
class PackStockType
{
    /**
     * Stock type: only based on pack quantity
     */
    public const STOCK_TYPE_PACK_ONLY = 0;
    /**
     * Stock type: only based on products quantity
     */
    public const STOCK_TYPE_PRODUCTS_ONLY = 1;
    /**
     * Stock type: based on products and pack quantity
     */
    public const STOCK_TYPE_BOTH = 2;
    /**
     * Stock type: based on configuration default value
     */
    public const STOCK_TYPE_DEFAULT = 3;
    public const ALLOWED_PACK_STOCK_TYPES = [self::STOCK_TYPE_PACK_ONLY, self::STOCK_TYPE_PRODUCTS_ONLY, self::STOCK_TYPE_BOTH, self::STOCK_TYPE_DEFAULT];
    /**
     * @param int $value
     *
     * @throws ProductPackConstraintException
     */
    public function __construct(int $value)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
