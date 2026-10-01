<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult;

class EditableCartRuleMinimum
{
    public function __construct(\PrestaShop\Decimal\DecimalNumber $amount, bool $amountTax, \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId $currencyId, bool $shipping)
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getAmount(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return bool
     */
    public function isAmountTax(): bool
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId
     */
    public function getCurrencyId(): \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId
    {
    }
    /**
     * @return bool
     */
    public function isShipping(): bool
    {
    }
}
