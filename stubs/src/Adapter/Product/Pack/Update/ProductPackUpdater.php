<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Pack\Update;

/**
 * Provides methods related to Product Pack update
 */
class ProductPackUpdater
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Pack\Repository\ProductPackRepository $productPackRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Pack\Repository\ProductPackRepository $productPackRepository)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Pack\ValueObject\PackId $packId
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\QuantifiedProduct[] $productsForPacking
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Pack\Exception\ProductPackConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Pack\Exception\ProductPackException
     */
    public function setPackProducts(\PrestaShop\PrestaShop\Core\Domain\Product\Pack\ValueObject\PackId $packId, array $productsForPacking): void
    {
    }
}
