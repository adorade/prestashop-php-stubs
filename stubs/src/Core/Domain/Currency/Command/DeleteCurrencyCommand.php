<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\Command;

/**
 * Class DeleteCurrencyCommand is responsible for deleting Currency.
 */
class DeleteCurrencyCommand
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
