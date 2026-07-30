<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\Command;

/**
 * Class ToggleCurrencyStatusCommand is responsible for changing the status of the currency.
 */
class ToggleCurrencyStatusCommand
{
    /**
     * @param int $currencyId
     *
     * @throws CurrencyException
     */
    public function __construct($currencyId)
    {
    }
    /**
     * @return CurrencyId
     */
    public function getCurrencyId()
    {
    }
}
