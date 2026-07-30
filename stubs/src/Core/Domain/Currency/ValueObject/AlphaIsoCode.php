<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject;

/**
 * Class AlphaIsoCode
 */
class AlphaIsoCode
{
    /**
     * @var string ISO Code validation pattern
     */
    public const PATTERN = '/^[a-zA-Z]{2,3}$/';
    /**
     * @param string $isoCode
     *
     * @throws CurrencyConstraintException
     */
    public function __construct($isoCode)
    {
    }
    /**
     * @return string
     */
    public function getValue()
    {
    }
}
