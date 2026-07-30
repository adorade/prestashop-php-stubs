<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Pack\Command;

/**
 * Removes all products from provided pack
 */
class RemoveAllProductsFromPackCommand
{
    /**
     * @param int $packId
     */
    public function __construct(int $packId)
    {
    }
    /**
     * @return PackId
     */
    public function getPackId(): \PrestaShop\PrestaShop\Core\Domain\Product\Pack\ValueObject\PackId
    {
    }
}
