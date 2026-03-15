<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject;

/**
 * Class NumericIsoCode
 */
class NumericIsoCode
{
    /**
     * @var string Numeric ISO Code validation pattern
     */
    public const PATTERN = '/^[0-9]{3}$/';
    /**
     * @param string $numericIsoCode
     *
     * @throws CurrencyConstraintException
     */
    public function __construct($numericIsoCode)
    {
    }
    /**
     * @return string
     */
    public function getValue(): string
    {
    }
}
