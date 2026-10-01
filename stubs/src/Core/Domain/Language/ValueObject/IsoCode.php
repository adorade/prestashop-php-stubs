<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\ValueObject;

/**
 * Stores language's two-letter (639-1) ISO code
 */
class IsoCode
{
    /**
     * @var string ISO Code validation pattern
     */
    public const PATTERN = '/^[a-zA-Z]{2,3}$/';
    /**
     * @param string $isoCode
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
