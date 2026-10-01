<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject;

/**
 * A cart rule condition for amount of money
 */
class MoneyAmountCondition
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\ValueObject\Money $money
     * @param bool $taxExcluded
     * @param bool|null $shippingExcluded
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\ValueObject\Money $money, bool $taxExcluded, bool $shippingExcluded = null)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\ValueObject\Money
     */
    public function getMoneyAmount(): \PrestaShop\PrestaShop\Core\Domain\ValueObject\Money
    {
    }
    /**
     * @return bool
     */
    public function isTaxExcluded(): bool
    {
    }
    /**
     * @return bool|null
     */
    public function isShippingExcluded(): ?bool
    {
    }
}
