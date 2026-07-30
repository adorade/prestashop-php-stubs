<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\Command;

/**
 * Deletes given currencies
 */
class BulkDeleteCurrenciesCommand
{
    /**
     * @param int[] $currencyIds
     */
    public function __construct(array $currencyIds)
    {
    }
    /**
     * @return CurrencyId[]
     */
    public function getCurrencyIds()
    {
    }
}
