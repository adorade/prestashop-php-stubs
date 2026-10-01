<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Group\Command;

class EditCustomerGroupCommand
{
    public function __construct(int $customerGroupId)
    {
    }
    public function getCustomerGroupId(): \PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject\GroupId
    {
    }
    public function getLocalizedNames(): ?array
    {
    }
    public function setLocalizedNames(array $localizedNames): self
    {
    }
    public function getReductionPercent(): ?\PrestaShop\Decimal\DecimalNumber
    {
    }
    public function setReductionPercent(\PrestaShop\Decimal\DecimalNumber $reductionPercent): self
    {
    }
    public function displayPriceTaxExcluded(): ?bool
    {
    }
    public function setDisplayPriceTaxExcluded(bool $displayPriceTaxExcluded): self
    {
    }
    public function showPrice(): ?bool
    {
    }
    public function setShowPrice(bool $showPrice): self
    {
    }
    public function getShopIds(): ?array
    {
    }
    /**
     * @param int[] $shopIds
     *
     * @return $this
     */
    public function setShopIds(array $shopIds): self
    {
    }
}
