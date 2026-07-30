<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Command;

/**
 * Contains all the data needed to handle the product update.
 *
 * @see UpdateProductHandlerInterface
 *
 * This command is only designed for the general data of product which can be persisted in one call.
 * It was not designed to handle the product relations.
 */
class UpdateProductCommand
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
     * @return string[]|null
     */
    public function getLocalizedMetaTitles(): ?array
    {
    }
    /**
     * @param string[] $localizedMetaTitles key => value pairs where each key represents language id
     *
     * @return self
     */
    public function setLocalizedMetaTitles(array $localizedMetaTitles): self
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedMetaDescriptions(): ?array
    {
    }
    /**
     * @param string[] $localizedMetaDescriptions key => value pairs where each key represents language id
     *
     * @return self
     */
    public function setLocalizedMetaDescriptions(array $localizedMetaDescriptions): self
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedLinkRewrites(): ?array
    {
    }
    /**
     * @param string[] $localizedLinkRewrites key => value pairs where each key represents language id
     *
     * @return self
     */
    public function setLocalizedLinkRewrites(array $localizedLinkRewrites): self
    {
    }
    /**
     * @return RedirectOption|null
     */
    public function getRedirectOption(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\RedirectOption
    {
    }
    /**
     * @param string $redirectType
     * @param int $redirectTarget
     *
     * @return self
     */
    public function setRedirectOption(string $redirectType, int $redirectTarget): self
    {
    }
    /**
     * @return DecimalNumber|null
     */
    public function getPrice(): ?\PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @param string $price
     *
     * @return self
     */
    public function setPrice(string $price): self
    {
    }
    /**
     * @return DecimalNumber|null
     */
    public function getEcotax(): ?\PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @param string $ecotax
     *
     * @return self
     */
    public function setEcotax(string $ecotax): self
    {
    }
    /**
     * @return int|null
     */
    public function getTaxRulesGroupId(): ?int
    {
    }
    /**
     * @param int $taxRulesGroupId
     *
     * @return self
     */
    public function setTaxRulesGroupId(int $taxRulesGroupId): self
    {
    }
    /**
     * @return bool|null
     */
    public function isOnSale(): ?bool
    {
    }
    /**
     * @param bool $onSale
     *
     * @return self
     */
    public function setOnSale(bool $onSale): self
    {
    }
    /**
     * @return DecimalNumber|null
     */
    public function getWholesalePrice(): ?\PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @param string $wholesalePrice
     *
     * @return self
     */
    public function setWholesalePrice(string $wholesalePrice): self
    {
    }
    /**
     * @return DecimalNumber|null
     */
    public function getUnitPrice(): ?\PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @param string $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(string $unitPrice): self
    {
    }
    /**
     * @return string|null
     */
    public function getUnity(): ?string
    {
    }
    /**
     * @param string $unity
     *
     * @return self
     */
    public function setUnity(string $unity): self
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedNames(): ?array
    {
    }
    /**
     * @param string[] $localizedNames
     *
     * @return self
     */
    public function setLocalizedNames(array $localizedNames): self
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedDescriptions(): ?array
    {
    }
    /**
     * @param string[] $localizedDescriptions
     *
     * @return self
     */
    public function setLocalizedDescriptions(array $localizedDescriptions): self
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedShortDescriptions(): ?array
    {
    }
    /**
     * @param string[] $localizedShortDescriptions
     *
     * @return self
     */
    public function setLocalizedShortDescriptions(array $localizedShortDescriptions): self
    {
    }
    /**
     * @return ProductVisibility|null
     */
    public function getVisibility(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductVisibility
    {
    }
    /**
     * @return bool|null
     */
    public function isAvailableForOrder(): ?bool
    {
    }
    /**
     * @param string $visibility
     *
     * @return self
     */
    public function setVisibility(string $visibility): self
    {
    }
    /**
     * @param bool $availableForOrder
     *
     * @return self
     */
    public function setAvailableForOrder(bool $availableForOrder): self
    {
    }
    /**
     * @return bool|null
     */
    public function isOnlineOnly(): ?bool
    {
    }
    /**
     * @param bool $onlineOnly
     *
     * @return self
     */
    public function setOnlineOnly(bool $onlineOnly): self
    {
    }
    /**
     * @return bool|null
     */
    public function showPrice(): ?bool
    {
    }
    /**
     * @param bool $showPrice
     *
     * @return self
     */
    public function setShowPrice(bool $showPrice): self
    {
    }
    /**
     * @return ProductCondition|null
     */
    public function getCondition(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductCondition
    {
    }
    /**
     * @param string $condition
     *
     * @return self
     */
    public function setCondition(string $condition): self
    {
    }
    /**
     * @param bool $showCondition
     *
     * @return self
     */
    public function setShowCondition(bool $showCondition): self
    {
    }
    /**
     * @return bool|null
     */
    public function showCondition(): ?bool
    {
    }
    /**
     * @return ManufacturerIdInterface|null
     */
    public function getManufacturerId(): ?\PrestaShop\PrestaShop\Core\Domain\Manufacturer\ValueObject\ManufacturerIdInterface
    {
    }
    /**
     * @param int $manufacturerId
     *
     * @throws ManufacturerConstraintException
     *
     * @return self
     */
    public function setManufacturerId(int $manufacturerId): self
    {
    }
    /**
     * @return Isbn|null
     */
    public function getIsbn(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\Isbn
    {
    }
    /**
     * @param string $isbn
     *
     * @return self
     */
    public function setIsbn(string $isbn): self
    {
    }
    /**
     * @return Upc|null
     */
    public function getUpc(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\Upc
    {
    }
    /**
     * @param string $upc
     *
     * @return self
     */
    public function setUpc(string $upc): self
    {
    }
    /**
     * @return Ean13|null
     */
    public function getEan13(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\Ean13
    {
    }
    /**
     * @param string $ean13
     *
     * @return self
     */
    public function setEan13(string $ean13): self
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
     * @return self
     */
    public function setMpn(string $mpn): self
    {
    }
    /**
     * @return Reference|null
     */
    public function getReference(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\Reference
    {
    }
    /**
     * @param string $reference
     *
     * @return self
     */
    public function setReference(string $reference): self
    {
    }
    /**
     * @return Dimension|null
     */
    public function getWidth(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\Dimension
    {
    }
    /**
     * @param string $width
     *
     * @return self
     */
    public function setWidth(string $width): self
    {
    }
    /**
     * @return Dimension|null
     */
    public function getHeight(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\Dimension
    {
    }
    /**
     * @param string $height
     *
     * @return self
     */
    public function setHeight(string $height): self
    {
    }
    /**
     * @return Dimension|null
     */
    public function getDepth(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\Dimension
    {
    }
    /**
     * @param string $depth
     *
     * @return self
     */
    public function setDepth(string $depth): self
    {
    }
    /**
     * @return Dimension|null
     */
    public function getWeight(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\Dimension
    {
    }
    /**
     * @param string $weight
     *
     * @return self
     */
    public function setWeight(string $weight): self
    {
    }
    /**
     * @return DecimalNumber|null
     */
    public function getAdditionalShippingCost(): ?\PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @param string $additionalShippingCost
     *
     * @return self
     */
    public function setAdditionalShippingCost(string $additionalShippingCost): self
    {
    }
    /**
     * @return DeliveryTimeNoteType|null
     */
    public function getDeliveryTimeNoteType(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\DeliveryTimeNoteType
    {
    }
    /**
     * @param int $type
     *
     * @return self
     */
    public function setDeliveryTimeNoteType(int $type): self
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedDeliveryTimeInStockNotes(): ?array
    {
    }
    /**
     * @param string[] $localizedDeliveryTimeInStockNotes
     *
     * @return self
     */
    public function setLocalizedDeliveryTimeInStockNotes(array $localizedDeliveryTimeInStockNotes): self
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedDeliveryTimeOutOfStockNotes(): ?array
    {
    }
    /**
     * @param string[] $localizedDeliveryTimeOutOfStockNotes
     *
     * @return self
     */
    public function setLocalizedDeliveryTimeOutOfStockNotes(array $localizedDeliveryTimeOutOfStockNotes): self
    {
    }
    /**
     * @return PackStockType|null
     */
    public function getPackStockType(): ?\PrestaShop\PrestaShop\Core\Domain\Product\Pack\ValueObject\PackStockType
    {
    }
    /**
     * @param int $packStockType
     *
     * @return self
     *
     * @throws ProductPackConstraintException
     */
    public function setPackStockType(int $packStockType): self
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
     * @return self
     */
    public function setMinimalQuantity(int $minimalQuantity): self
    {
    }
    /**
     * @return LowStockThreshold|null
     */
    public function getLowStockThreshold(): ?\PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject\LowStockThreshold
    {
    }
    /**
     * @param int $lowStockThreshold
     *
     * @return self
     */
    public function setLowStockThreshold(int $lowStockThreshold): self
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
     * @return self
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
     * @return self
     */
    public function setLocalizedAvailableLaterLabels(array $localizedAvailableLaterLabels): self
    {
    }
    /**
     * @return DateTimeInterface|null
     */
    public function getAvailableDate(): ?\DateTimeInterface
    {
    }
    /**
     * @param DateTimeInterface $availableDate
     *
     * @return self
     */
    public function setAvailableDate(\DateTimeInterface $availableDate): self
    {
    }
    /**
     * @return bool|null
     */
    public function isActive(): ?bool
    {
    }
    /**
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active): self
    {
    }
}
