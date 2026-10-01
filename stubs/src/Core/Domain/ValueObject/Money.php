<?php

namespace PrestaShop\PrestaShop\Core\Domain\ValueObject;

/**
 * An amount of money with currency
 */
class Money
{
    /**
     * @param \PrestaShop\Decimal\DecimalNumber $amount
     * @param \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId $currencyId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Exception\DomainConstraintException
     */
    public function __construct(\PrestaShop\Decimal\DecimalNumber $amount, \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId $currencyId)
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
}
