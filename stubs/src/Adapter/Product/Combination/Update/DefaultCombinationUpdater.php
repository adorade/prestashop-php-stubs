<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\Update;

/**
 * Responsible for updating product default combination
 */
class DefaultCombinationUpdater
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository)
    {
    }
    /**
     * Marks the provided combination as default (combination->default_on)
     * and removes the mark from previous default combination
     *
     * Notice: Product->cache_default_attribute is updated in Product add(), update(), delete() methods.
     *
     * @see Product::updateDefaultAttribute()
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $defaultCombinationId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     */
    public function setDefaultCombination(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $defaultCombinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
}
