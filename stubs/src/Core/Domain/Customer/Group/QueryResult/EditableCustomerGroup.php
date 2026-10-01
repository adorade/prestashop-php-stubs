<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Group\QueryResult;

class EditableCustomerGroup
{
    /**
     * @param int $id
     * @param array<int, string> $localizedNames array of names indexed by language id
     * @param \PrestaShop\Decimal\DecimalNumber $reduction
     * @param bool $displayPriceTaxExcluded
     * @param bool $showPrice
     * @param array<int> $shopIds
     */
    public function __construct(int $id, array $localizedNames, \PrestaShop\Decimal\DecimalNumber $reduction, bool $displayPriceTaxExcluded, bool $showPrice, array $shopIds)
    {
    }
    /**
     * @return int
     */
    public function getId(): int
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedNames(): array
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getReduction(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return bool
     */
    public function displayPriceTaxExcluded(): bool
    {
    }
    /**
     * @return bool
     */
    public function showPrice(): bool
    {
    }
    /**
     * @return array<int>
     */
    public function getShopIds(): array
    {
    }
}
