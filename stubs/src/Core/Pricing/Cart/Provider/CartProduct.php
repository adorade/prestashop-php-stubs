<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Cart\Provider;

/**
 * Lightweight DTO representing a product line in a cart, as stored in ps_cart_product.
 *
 * @experimental
 */
class CartProduct
{
    public function __construct(protected readonly int $productId, protected readonly int $combinationId, protected readonly int $customizationId, protected readonly int $quantity)
    {
    }
    public function getProductId(): int
    {
    }
    public function getCombinationId(): int
    {
    }
    public function getCustomizationId(): int
    {
    }
    public function getQuantity(): int
    {
    }
}
