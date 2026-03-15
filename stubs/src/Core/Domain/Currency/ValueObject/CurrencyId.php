<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject;

/**
 * Class CurrencyId is responsible for providing currency id data.
 */
class CurrencyId implements \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyIdInterface
{
    /**
     * @param int $currencyId
     *
     * @throws CurrencyException
     */
    public function __construct(int $currencyId)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
