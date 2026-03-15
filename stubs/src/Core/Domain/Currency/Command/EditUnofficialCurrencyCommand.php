<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\Command;

class EditUnofficialCurrencyCommand extends \PrestaShop\PrestaShop\Core\Domain\Currency\Command\EditCurrencyCommand
{
    /**
     * @return AlphaIsoCode|null
     */
    public function getIsoCode()
    {
    }
    /**
     * @param string $isoCode
     *
     * @return self
     *
     * @throws CurrencyConstraintException
     */
    public function setIsoCode($isoCode)
    {
    }
}
