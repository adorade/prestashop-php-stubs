<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Update\Filler;

class SeoFiller implements \PrestaShop\PrestaShop\Adapter\Product\Update\Filler\ProductFillerInterface
{
    /**
     * @param ProductRepository $productRepository
     * @param CategoryRepository $categoryRepository
     * @param Tools $tools
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryRepository $categoryRepository, \PrestaShop\PrestaShop\Adapter\Tools $tools)
    {
    }
    /**
     * @param Product $product
     * @param UpdateProductCommand $command
     *
     * @return array
     */
    public function fillUpdatableProperties(\Product $product, \PrestaShop\PrestaShop\Core\Domain\Product\Command\UpdateProductCommand $command): array
    {
    }
}
