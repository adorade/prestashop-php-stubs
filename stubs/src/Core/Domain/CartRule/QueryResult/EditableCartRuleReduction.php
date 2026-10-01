<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult;

class EditableCartRuleReduction
{
    public function __construct(\PrestaShop\Decimal\DecimalNumber $percent, \PrestaShop\Decimal\DecimalNumber $amount, bool $tax, ?\PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId $currencyId, ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, bool $excludeSpecial)
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getPercent(): \PrestaShop\Decimal\DecimalNumber
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
    public function isTax(): bool
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId|null
     */
    public function getCurrencyId(): ?\PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId|null
     */
    public function getProductId(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return bool
     */
    public function isExcludeSpecial(): bool
    {
    }
}
