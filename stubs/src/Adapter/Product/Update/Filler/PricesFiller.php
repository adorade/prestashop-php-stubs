<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Update\Filler;

/**
 * Fills product properties which are related to product price
 */
class PricesFiller implements \PrestaShop\PrestaShop\Adapter\Product\Update\Filler\ProductFillerInterface
{
    /**
     * @param NumberExtractor $numberExtractor
     * @param Configuration $configuration
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Util\Number\NumberExtractor $numberExtractor, \PrestaShop\PrestaShop\Adapter\Configuration $configuration)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function fillUpdatableProperties(\Product $product, \PrestaShop\PrestaShop\Core\Domain\Product\Command\UpdateProductCommand $command): array
    {
    }
}
