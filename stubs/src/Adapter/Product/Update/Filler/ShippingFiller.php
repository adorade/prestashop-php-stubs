<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Update\Filler;

/**
 * Fills product properties which are related to product shipping
 */
class ShippingFiller implements \PrestaShop\PrestaShop\Adapter\Product\Update\Filler\ProductFillerInterface
{
    /**
     * {@inheritDoc}
     */
    public function fillUpdatableProperties(\Product $product, \PrestaShop\PrestaShop\Core\Domain\Product\Command\UpdateProductCommand $command): array
    {
    }
}
