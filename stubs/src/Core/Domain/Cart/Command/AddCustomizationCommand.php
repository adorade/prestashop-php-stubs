<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\Command;

/**
 * Adds product customization
 */
class AddCustomizationCommand
{
    /**
     * @param int $cartId
     * @param int $productId
     * @param array $customizationValuesByFieldIds
     *
     * @throws CartConstraintException
     */
    public function __construct(int $cartId, int $productId, array $customizationValuesByFieldIds)
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
     * @return array
     */
    public function getCustomizationValuesByFieldIds(): array
    {
    }
}
