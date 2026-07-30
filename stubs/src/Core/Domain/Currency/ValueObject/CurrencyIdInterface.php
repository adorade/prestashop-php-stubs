<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject;

/**
 * Defines contract for currency identification value.
 * This interface allows to explicitly define whether the currency relation is optional or required.
 *
 * @see CurrencyId
 * @see NoCurrencyId
 */
interface CurrencyIdInterface
{
    /**
     * @return int
     */
    public function getValue(): int;
}
