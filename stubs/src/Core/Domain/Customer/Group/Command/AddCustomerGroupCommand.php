<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Group\Command;

class AddCustomerGroupCommand
{
    /**
     * @param string[] $localizedNames
     * @param \PrestaShop\Decimal\DecimalNumber $reductionPercent
     * @param bool $displayPriceTaxExcluded
     * @param bool $showPrice
     * @param array<int> $shopIds
     */
    public function __construct(array $localizedNames, \PrestaShop\Decimal\DecimalNumber $reductionPercent, bool $displayPriceTaxExcluded, bool $showPrice, array $shopIds)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedNames(): array
    {
    }
    /**
     * @return bool
     */
    public function displayPriceTaxExcluded(): bool
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getReductionPercent(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return bool
     */
    public function showPrice(): bool
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[]
     */
    public function getShopIds(): array
    {
    }
}
