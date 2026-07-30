<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Repository;

/**
 * Returns preview data for a product or a list of product
 *
 * @todo add function for the list that should be used in the new product search API
 */
class ProductPreviewRepository
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Core\Domain\Product\Image\Provider\ProductImageProviderInterface $productImageProvider)
    {
    }
    public function getPreview(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId): \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductPreview
    {
    }
}
