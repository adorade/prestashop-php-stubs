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
     * @throws CartConstraintException
     */
    public function __construct(int $cartId, int $productId, int $combinationId = null, int $customizationId = null)
    {
    }
    /**
     * @return CartId
     */
    public function getCartId()
    {
    }
    /**
     * @return ProductId
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
