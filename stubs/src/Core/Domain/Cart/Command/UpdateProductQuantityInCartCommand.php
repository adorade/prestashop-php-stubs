<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\Command;

/**
 * Updates product quantity in cart
 * Quantity given must include gift product
 */
class UpdateProductQuantityInCartCommand
{
    /**
     * @param int $cartId
     * @param int $productId
     * @param int $quantity
     * @param int|null $combinationId
     * @param int|null $customizationId
     *
     * @throws CartConstraintException
     * @throws CartException
     */
    public function __construct($cartId, $productId, $quantity, $combinationId = null, $customizationId = null)
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
    public function getNewQuantity()
    {
    }
    /**
     * @return CombinationId|null
     */
    public function getCombinationId(): ?\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
    {
    }
    /**
     * @return CustomizationId|null
     */
    public function getCustomizationId(): ?\PrestaShop\PrestaShop\Core\Domain\Product\Customization\ValueObject\CustomizationId
    {
    }
}
