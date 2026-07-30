<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Update;

/**
 * Updates product indexation
 */
class ProductIndexationUpdater
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager, bool $isSearchIndexationOn)
    {
    }
    /**
     * Checks if one of the updated fields is used for the indexation, if one of them is
     * then a new indexation is needed.
     *
     * @param array $updatedFields
     * @return bool
     */
    public function isIndexationNeeded(array $updatedFields): bool
    {
    }
    /**
     * @param Product $product
     *
     * @return bool
     */
    public function isVisibleOnSearch(\Product $product): bool
    {
    }
    /**
     * @param Product $product
     *
     * @throws CannotUpdateProductException
     * @throws CoreException
     */
    public function updateIndexation(\Product $product, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
}
