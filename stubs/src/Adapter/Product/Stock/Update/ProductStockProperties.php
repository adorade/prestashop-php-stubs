<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Stock\Update;

class ProductStockProperties
{
    /**
     * @param StockModification|null $stockModification
     * @param OutOfStockType|null $outOfStockType
     * @param string|null $location
     */
    public function __construct(?\PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\StockModification $stockModification = null, ?\PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\OutOfStockType $outOfStockType = null, ?string $location = null)
    {
    }
    /**
     * @return StockModification|null
     */
    public function getStockModification(): ?\PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\StockModification
    {
    }
    /**
     * @return OutOfStockType|null
     */
    public function getOutOfStockType(): ?\PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\OutOfStockType
    {
    }
    /**
     * @return string|null
     */
    public function getLocation(): ?string
    {
    }
}
