<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Pack\Command;

/**
 * Sets products of product pack
 */
class SetPackProductsCommand
{
    /**
     * @param int $packId
     * @param array $products array of elements where each element contains product information
     *                        which allows building @var QuantifiedProduct
     */
    public function __construct(int $packId, array $products)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Pack\ValueObject\PackId
     */
    public function getPackId(): \PrestaShop\PrestaShop\Core\Domain\Product\Pack\ValueObject\PackId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\QuantifiedProduct[]
     */
    public function getProducts(): array
    {
    }
}
