<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Command;

/**
 * Updates product tags in provided languages
 */
class SetProductTagsCommand
{
    /**
     * @param int $productId
     * @param array $localizedTags
     */
    public function __construct(int $productId, array $localizedTags)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\LocalizedTags[]
     */
    public function getLocalizedTagsList(): array
    {
    }
}
