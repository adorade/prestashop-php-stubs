<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\Command;

class EditUnofficialCurrencyCommand extends \PrestaShop\PrestaShop\Core\Domain\Currency\Command\AbstractEditCurrencyCommand
{
    public function getIsoCode(): ?\PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\AlphaIsoCode
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyConstraintException
     */
    public function setIsoCode(string $isoCode): self
    {
    }
}
