<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\Update;

class CombinationStockProperties
{
    /**
     * @param StockModification|null $stockModification
     * @param string|null $location
     */
    public function __construct(?\PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\StockModification $stockModification = null, ?string $location = null)
    {
    }
    /**
     * @return StockModification|null
     */
    public function getStockModification(): ?\PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\StockModification
    {
    }
    /**
     * @return string|null
     */
    public function getLocation(): ?string
    {
    }
}
