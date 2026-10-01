<?php

namespace PrestaShop\PrestaShop\Core\Domain\Search\Command;

/**
 * Triggers search indexation.
 */
class SearchIndexationCommand
{
    public function __construct(bool $full = false, ?\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint = null, ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId = null)
    {
    }
    /**
     * Indicates if full reindex is requested.
     */
    public function isFull(): bool
    {
    }
    /**
     * Returns shop constraint for indexation.
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
    /**
     * Return product id for indexation
     */
    public function getProductId(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
}
