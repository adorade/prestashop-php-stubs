<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\Command;

/**
 * Responsible for adding product to cart
 */
class AddProductToCartCommand
{
    /**
     * @param int $cartId
     * @param int $productId
     * @param int $quantity
     * @param int|null $combinationId
     * @param array $customizationsByFieldIds
     *
     * @throws CartConstraintException
     */
    public function __construct(int $cartId, int $productId, int $quantity, ?int $combinationId = null, array $customizationsByFieldIds = [])
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
     * @return int
     */
    public function getQuantity(): int
    {
    }
    /**
     * @return CombinationId|null
     */
    public function getCombinationId(): ?\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
    {
    }
    /**
     * @return array
     */
    public function getCustomizationsByFieldIds(): array
    {
    }
}
