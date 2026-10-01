<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject;

/**
 * Indicates that no currency was specified
 */
class NoCurrencyId implements \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyIdInterface
{
    /**
     * Value when no currency is specified
     */
    public const NO_CURRENCY_ID = 0;
    /**
     * {@inheritDoc}
     */
    public function getValue(): int
    {
    }
}
