<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\Command;

/**
 * Updates cart product price
 */
class UpdateProductPriceInCartCommand
{
    /**
     * @param int $cartId
     * @param int $productId
     * @param int $combinationId
     * @param float $price
     */
    public function __construct($cartId, $productId, $combinationId, $price)
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
     * @return int
     */
    public function getCombinationId()
    {
    }
    /**
     * @return float
     */
    public function getPrice()
    {
    }
}
