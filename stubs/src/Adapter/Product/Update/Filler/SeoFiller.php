<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Update\Filler;

class SeoFiller implements \PrestaShop\PrestaShop\Adapter\Product\Update\Filler\ProductFillerInterface
{
    use \PrestaShop\PrestaShop\Adapter\Domain\LocalizedObjectModelTrait;
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     * @param \PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryRepository $categoryRepository
     * @param \PrestaShop\PrestaShop\Adapter\Tools $tools
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryRepository $categoryRepository, \PrestaShop\PrestaShop\Adapter\Tools $tools)
    {
    }
    /**
     * @param \Product $product
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Command\UpdateProductCommand $command
     *
     * @return array
     */
    public function fillUpdatableProperties(\Product $product, \PrestaShop\PrestaShop\Core\Domain\Product\Command\UpdateProductCommand $command): array
    {
    }
}
