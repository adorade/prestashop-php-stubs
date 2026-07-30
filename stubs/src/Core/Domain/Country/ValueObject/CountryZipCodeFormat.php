<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\ValueObject;

/**
 * Contains a valid zip code format for country
 */
class CountryZipCodeFormat
{
    /**
     * Zip code format regexp validation pattern
     */
    public const ZIP_CODE_PATTERN = '/^[NLCnlc 0-9-]+$/';
    /**
     * @var string
     */
    protected $zipCodeFormat;
    public function __construct(string $zipCodeFormat)
    {
    }
    public function getValue(): string
    {
    }
    /**
     * @param string $zipCodeFormat
     *
     * @throws CountryConstraintException
     */
    protected function assertIsValidZipCodeFormat(string $zipCodeFormat): void
    {
    }
}
