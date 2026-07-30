<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Stock\Command;

/**
 * Updates product stock properties which are in a dedicated StockAvailable entity
 *
 * @see UpdateProductStockHandlerInterface
 */
class UpdateProductStockAvailableCommand
{
    /**
     * @param int $productId
     * @param ShopConstraint $shopConstraint
     */
    public function __construct(int $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return ShopConstraint
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
    /**
     * @return int|null
     */
    public function getDeltaQuantity(): ?int
    {
    }
    /**
     * @param int $deltaQuantity
     *
     * @return self
     */
    public function setDeltaQuantity(int $deltaQuantity): self
    {
    }
    /**
     * @return OutOfStockType|null
     */
    public function getOutOfStockType(): ?\PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\OutOfStockType
    {
    }
    /**
     * @param int $outOfStockType
     *
     * @return $this
     *
     * @throws ProductStockConstraintException
     */
    public function setOutOfStockType(int $outOfStockType): self
    {
    }
    /**
     * @return string|null
     */
    public function getLocation(): ?string
    {
    }
    /**
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location): self
    {
    }
}
