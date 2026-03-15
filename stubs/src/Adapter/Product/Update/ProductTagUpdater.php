<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Update;

/**
 * Methods related for product-tags update operations
 */
class ProductTagUpdater
{
    /**
     * @param TagRepository $tagRepository
     * @param ProductIndexationUpdater $productIndexationUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\TagRepository $tagRepository, \PrestaShop\PrestaShop\Adapter\Product\Update\ProductIndexationUpdater $productIndexationUpdater)
    {
    }
    /**
     * Removes previous tags & sets new list of tags for a product.
     *
     * @param Product $product
     * @param LocalizedTags[] $localizedTagsList
     *
     * @throws CannotUpdateProductException
     * @throws CoreException
     */
    public function setProductTags(\Product $product, array $localizedTagsList): void
    {
    }
}
