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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CartConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CartException
     */
    public function __construct($cartId, $productId, $quantity, $combinationId = null, $customizationId = null)
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
     * @return int
     */
    public function getNewQuantity()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId|null
     */
    public function getCombinationId(): ?\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Customization\ValueObject\CustomizationId|null
     */
    public function getCustomizationId(): ?\PrestaShop\PrestaShop\Core\Domain\Product\Customization\ValueObject\CustomizationId
    {
    }
}
