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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CartConstraintException
     */
    public function __construct(int $cartId, int $productId, array $customizationValuesByFieldIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
     */
    public function getCartId(): \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
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
