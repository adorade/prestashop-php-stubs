<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command;

/**
 * Contains all the data needed to handle the command update.
 *
 * @see UpdateCombinationHandlerInterface
 *
 * This command is only designed for the general data of combination which can be persisted in one call.
 * It was not designed to handle the combination relations.
 */
class UpdateCombinationCommand
{
    /**
     * @param int $combinationId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductConstraintException
     */
    public function __construct(int $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
     */
    public function getCombinationId(): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
    {
    }
    /**
     * @return bool|null
     */
    public function isDefault(): ?bool
    {
    }
    /**
     * @param bool|null $isDefault
     *
     * @return static
     */
    public function setIsDefault(?bool $isDefault): self
    {
    }
    /**
     * @deprecated since 9.0 will be removed in 10.0
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\Gtin|null
     */
    public function getEan13(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\Gtin
    {
    }
    /**
     * @deprecated since 9.0 will be removed in 10.0
     *
     * @param string $gtin
     *
     * @return $this
     */
    public function setEan13(string $gtin): self
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\Gtin|null
     */
    public function getGtin(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\Gtin
    {
    }
    /**
     * @param string $gtin
     *
     * @return $this
     */
    public function setGtin(string $gtin): self
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\Isbn|null
     */
    public function getIsbn(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\Isbn
    {
    }
    /**
     * @param string $isbn
     *
     * @return $this
     */
    public function setIsbn(string $isbn): self
    {
    }
    /**
     * @return string|null
     */
    public function getMpn(): ?string
    {
    }
    /**
     * @param string $mpn
     *
     * @return $this
     */
    public function setMpn(string $mpn): self
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\Reference|null
     */
    public function getReference(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\Reference
    {
    }
    /**
     * @param string $reference
     *
     * @return $this
     */
    public function setReference(string $reference): self
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\Upc|null
     */
    public function getUpc(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\Upc
    {
    }
    /**
     * @param string $upc
     *
     * @return $this
     */
    public function setUpc(string $upc): self
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber|null
     */
    public function getImpactOnWeight(): ?\PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @param string $impactOnWeight
     *
     * @return $this
     */
    public function setImpactOnWeight(string $impactOnWeight): self
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber|null
     */
    public function getImpactOnPrice(): ?\PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @param string $impactOnPrice
     *
     * @return $this
     */
    public function setImpactOnPrice(string $impactOnPrice): self
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber|null
     */
    public function getEcoTax(): ?\PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @param string $ecoTax
     *
     * @return $this
     */
    public function setEcoTax(string $ecoTax): self
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber|null
     */
    public function getImpactOnUnitPrice(): ?\PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @param string $impactOnUnitPrice
     *
     * @return $this
     */
    public function setImpactOnUnitPrice(string $impactOnUnitPrice): self
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber|null
     */
    public function getWholesalePrice(): ?\PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @param string $wholesalePrice
     *
     * @return $this
     */
    public function setWholesalePrice(string $wholesalePrice): self
    {
    }
    /**
     * @return int|null
     */
    public function getMinimalQuantity(): ?int
    {
    }
    /**
     * @param int $minimalQuantity
     *
     * @return $this
     */
    public function setMinimalQuantity(int $minimalQuantity): self
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\LowStockThreshold|null
     */
    public function getLowStockThreshold(): ?\PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\LowStockThreshold
    {
    }
    /**
     * @param int $lowStockThreshold
     *
     * @return $this
     */
    public function setLowStockThreshold(int $lowStockThreshold): self
    {
    }
    /**
     * @return \DateTimeInterface|null
     */
    public function getAvailableDate(): ?\DateTimeInterface
    {
    }
    /**
     * @param \DateTimeInterface $availableDate
     *
     * @return $this
     */
    public function setAvailableDate(\DateTimeInterface $availableDate): self
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedAvailableNowLabels(): ?array
    {
    }
    /**
     * @param string[] $localizedAvailableNowLabels
     *
     * @return $this
     */
    public function setLocalizedAvailableNowLabels(array $localizedAvailableNowLabels): self
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedAvailableLaterLabels(): ?array
    {
    }
    /**
     * @param string[] $localizedAvailableLaterLabels
     *
     * @return $this
     */
    public function setLocalizedAvailableLaterLabels(array $localizedAvailableLaterLabels): self
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}
