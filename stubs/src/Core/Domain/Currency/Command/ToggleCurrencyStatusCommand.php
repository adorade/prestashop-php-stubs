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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyException
     */
    public function __construct($currencyId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId
     */
    public function getCurrencyId()
    {
    }
}
