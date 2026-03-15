<?php

namespace PrestaShop\PrestaShop\Core\Domain\ValueObject;

/**
 * An amount of money with currency
 */
class Money
{
    /**
     * @param DecimalNumber $amount
     * @param CurrencyId $currencyId
     *
     * @throws DomainConstraintException
     */
    public function __construct(\PrestaShop\Decimal\DecimalNumber $amount, \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId $currencyId)
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getAmount(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return CurrencyId
     */
    public function getCurrencyId(): \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId
    {
    }
}
