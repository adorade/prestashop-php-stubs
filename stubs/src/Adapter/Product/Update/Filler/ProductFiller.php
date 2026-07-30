<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Update\Filler;

/**
 * This class wraps up all the product property fillers and merges the updatable properties into a single array.
 * It is intentional that this class doesn't have the same tag as all the internal property fillers.
 *
 * All the internal property fillers are split just to contain less code and be more readable (because the Product contains many of properties).
 */
class ProductFiller implements \PrestaShop\PrestaShop\Adapter\Product\Update\Filler\ProductFillerInterface
{
    /**
     * @param ProductFillerInterface[] $updatablePropertyFillers
     */
    public function __construct(iterable $updatablePropertyFillers)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function fillUpdatableProperties(\Product $product, \PrestaShop\PrestaShop\Core\Domain\Product\Command\UpdateProductCommand $command): array
    {
    }
}
