<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\Query;

/**
 * Class GetCurrencyForEditing
 */
class GetCurrencyForEditing
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
