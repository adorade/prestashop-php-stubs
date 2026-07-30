<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\Command;

/**
 * Enables/disables currencies status
 */
class BulkToggleCurrenciesStatusCommand
{
    /**
     * @param int[] $currencyIds
     * @param bool $expectedStatus
     */
    public function __construct(array $currencyIds, bool $expectedStatus)
    {
    }
    /**
     * @return CurrencyId[]
     */
    public function getCurrencyIds()
    {
    }
    /**
     * @return bool
     */
    public function getStatus()
    {
    }
}
