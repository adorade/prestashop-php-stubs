<?php

namespace PrestaShop\PrestaShop\Core\Domain\SpecificPrice\Command;

/**
 * @deprecated since 8.0.0 and will be removed in the next major version.
 * @see UpdateProductPriceInCartCommand to change a product price in a cart
 * or @see DeleteProductSpecificPriceCommand if you wish to set special price rules on a product
 */
class DeleteSpecificPriceByCartProductCommand
{
    public function __construct(int $cartId, int $productId)
    {
    }
    /**
     * @return CartId
     */
    public function getCartId(): \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return int|null
     */
    public function getProductAttributeId(): ?int
    {
    }
    /**
     * @param int $productAttributeId
     *
     * @return DeleteSpecificPriceByCartProductCommand
     */
    public function setProductAttributeId(int $productAttributeId): self
    {
    }
}
