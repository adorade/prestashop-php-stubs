<?php

namespace PrestaShop\PrestaShop\Core\Domain\ValueObject;

class Money
{
    /**
     * @param \PrestaShop\Decimal\DecimalNumber $amount
     * @param \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId $currencyId
     * @param bool $taxIncluded
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Exception\DomainConstraintException
     */
    public function __construct(\PrestaShop\Decimal\DecimalNumber $amount, \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId $currencyId, bool $taxIncluded)
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getAmount(): \PrestaShop\Decimal\DecimalNumber
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
    public function isTaxIncluded(): bool
    {
    }
}
