<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Pack\Update;

/**
 * Provides methods related to Product Pack update
 */
class ProductPackUpdater
{
    /**
     * @param ProductRepository $productRepository
     * @param ProductPackRepository $productPackRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Pack\Repository\ProductPackRepository $productPackRepository)
    {
    }
    /**
     * @param PackId $packId
     * @param QuantifiedProduct[] $productsForPacking
     *
     * @throws CoreException
     * @throws ProductPackConstraintException
     * @throws ProductPackException
     */
    public function setPackProducts(\PrestaShop\PrestaShop\Core\Domain\Product\Pack\ValueObject\PackId $packId, array $productsForPacking): void
    {
    }
}
