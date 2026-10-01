<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject;

class Precision
{
    public const DEFAULT_PRECISION = 2;
    /**
     * @param int $precision
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyConstraintException
     */
    public function __construct(int $precision)
    {
    }
    /**
     * @return int
     */
    public function getValue()
    {
    }
}
