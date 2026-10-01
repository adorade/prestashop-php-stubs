<?php

namespace PrestaShop\PrestaShop\Adapter\Cart\Comparator;

class CartProductUpdate
{
    /**
     * @param int $productId
     * @param int $combinationId
     * @param int $deltaQuantity
     * @param bool $created
     * @param int $customizationId
     */
    public function __construct(int $productId, int $combinationId, int $deltaQuantity, bool $created, int $customizationId = 0)
    {
    }
    /**
     * @param CartProductUpdate $cartProductUpdate
     *
     * @return bool
     */
    public function productMatches(\PrestaShop\PrestaShop\Adapter\Cart\Comparator\CartProductUpdate $cartProductUpdate): bool
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
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
    /**
     * @return int
     */
    public function getDeltaQuantity(): int
    {
    }
    /**
     * @param int $deltaQuantity
     *
     * @return $this
     */
    public function setDeltaQuantity(int $deltaQuantity): self
    {
    }
    /**
     * @return bool
     */
    public function isCreated(): bool
    {
    }
    /**
     * @return array
     */
    public function toArray(): array
    {
    }
}
