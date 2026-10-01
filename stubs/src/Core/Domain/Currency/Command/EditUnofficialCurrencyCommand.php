<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\Command;

class EditUnofficialCurrencyCommand extends \PrestaShop\PrestaShop\Core\Domain\Currency\Command\EditCurrencyCommand
{
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\AlphaIsoCode|null
     */
    public function getIsoCode()
    {
    }
    /**
     * @param string $isoCode
     *
     * @return self
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyConstraintException
     */
    public function setIsoCode($isoCode)
    {
    }
}
