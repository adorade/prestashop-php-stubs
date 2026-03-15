<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation;

/**
 * Holds data of cart product information
 */
class CartProduct
{
    /**
     * CartProduct constructor.
     *
     * @param int $productId
     * @param int $attributeId
     * @param string $name
     * @param string $attribute
     * @param string $reference
     * @param string $unitPrice
     * @param int $quantity
     * @param string $price
     * @param string $imageLink
     * @param Customization|null $customization
     * @param int $availableStock
     * @param bool $availableOutOfStock
     * @param bool $isGift
     */
    public function __construct(int $productId, int $attributeId, string $name, string $attribute, string $reference, string $unitPrice, int $quantity, string $price, string $imageLink, ?\PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation\Customization $customization, int $availableStock, bool $availableOutOfStock, bool $isGift = false)
    {
    }
    /**
     * @return int
     */
    public function getProductId(): int
    {
    }
    /**
     * @return string
     */
    public function getReference(): string
    {
    }
    /**
     * @return string
     */
    public function getUnitPrice(): string
    {
    }
    /**
     * @return int
     */
    public function getQuantity(): int
    {
    }
    /**
     * @return string
     */
    public function getPrice(): string
    {
    }
    /**
     * @return string
     */
    public function getImageLink(): string
    {
    }
    /**
     * @return int
     */
    public function getAttributeId(): int
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @return string
     */
    public function getAttribute(): string
    {
    }
    /**
     * @return Customization|null
     */
    public function getCustomization(): ?\PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation\Customization
    {
    }
    /**
     * @return int
     */
    public function getAvailableStock(): int
    {
    }
    /**
     * @return bool
     */
    public function isAvailableOutOfStock(): bool
    {
    }
    /**
     * @return bool
     */
    public function isGift(): bool
    {
    }
}
