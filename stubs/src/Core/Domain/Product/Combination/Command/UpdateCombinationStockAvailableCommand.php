<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command;

class UpdateCombinationStockAvailableCommand
{
    /**
     * @param int $combinationId
     */
    public function __construct(int $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    /**
     * @return CombinationId
     */
    public function getCombinationId(): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
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
     * @return $this
     */
    public function setDeltaQuantity(int $deltaQuantity): self
    {
    }
    /**
     * @return int|null
     */
    public function getFixedQuantity(): ?int
    {
    }
    /**
     * @param int $fixedQuantity
     *
     * @return $this
     */
    public function setFixedQuantity(int $fixedQuantity): self
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
     * @return $this
     */
    public function setLocation(string $location): self
    {
    }
    /**
     * @return ShopConstraint
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}
