<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\Command;

/**
 * Command aim to edit carrier
 */
class EditCarrierCommand
{
    public function __construct(int $carrierId)
    {
    }
    public function getCarrierId(): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId
    {
    }
    public function getName(): ?string
    {
    }
    public function setName(string $name): self
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedDelay(): ?array
    {
    }
    /**
     * @param string[] $localizedDelay
     */
    public function setLocalizedDelay(array $localizedDelay): self
    {
    }
    public function getGrade(): ?int
    {
    }
    public function setGrade(int $grade): self
    {
    }
    public function getTrackingUrl(): ?string
    {
    }
    public function setTrackingUrl(string $trackingUrl): self
    {
    }
    public function getPosition(): ?int
    {
    }
    public function setPosition(int $position): self
    {
    }
    public function getActive(): ?bool
    {
    }
    public function setActive(bool $active): self
    {
    }
    public function getMaxWidth(): ?int
    {
    }
    public function setMaxWidth(?int $max_width): self
    {
    }
    public function getMaxHeight(): ?int
    {
    }
    public function setMaxHeight(?int $max_height): self
    {
    }
    public function getMaxDepth(): ?int
    {
    }
    public function setMaxDepth(?int $max_depth): self
    {
    }
    public function getMaxWeight(): ?float
    {
    }
    public function setMaxWeight(?float $max_weight): self
    {
    }
    public function getAssociatedGroupIds(): ?array
    {
    }
    public function setAssociatedGroupIds(?array $associatedGroupIds): self
    {
    }
    public function getLogoPathName(): ?string
    {
    }
    public function setLogoPathName(?string $logoPathName): self
    {
    }
    public function hasAdditionalHandlingFee(): ?bool
    {
    }
    public function setAdditionalHandlingFee(bool $hasAdditionalHandlingFee): self
    {
    }
    public function isFree(): ?bool
    {
    }
    public function setIsFree(bool $isFree): self
    {
    }
    public function getShippingMethod(): ?\PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\ShippingMethod
    {
    }
    public function setShippingMethod(int $shippingMethod): self
    {
    }
    public function getTaxRuleGroupId(): ?int
    {
    }
    public function setIdTaxRuleGroup(int $idTaxRuleGroup): self
    {
    }
    public function getRangeBehavior(): ?\PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\OutOfRangeBehavior
    {
    }
    public function setRangeBehavior(int $rangeBehavior): self
    {
    }
    public function getAssociatedShopIds(): ?array
    {
    }
    /**
     * @param int[] $associatedShopIds
     *
     * @return void
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopException
     */
    public function setAssociatedShopIds(array $associatedShopIds): void
    {
    }
    public function getZones(): ?array
    {
    }
    public function setZones(array $zones): self
    {
    }
}
