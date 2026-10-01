<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\Command;

/**
 * Removes given product from cart.
 */
class RemoveProductFromCartCommand
{
    /**
     * @param int $cartId
     * @param int $productId
     * @param int|null $combinationId
     * @param int|null $customizationId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CartConstraintException
     */
    public function __construct(int $cartId, int $productId, int $combinationId = null, int $customizationId = null)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
     */
    public function getCartId()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
     */
    public function getProductId()
    {
    }
    /**
     * @return int|null
     */
    public function getCombinationId()
    {
    }
    /**
     * @return int|null
     */
    public function getCustomizationId()
    {
    }
}
