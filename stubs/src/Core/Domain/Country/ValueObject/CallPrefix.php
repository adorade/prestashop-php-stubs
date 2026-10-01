<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\ValueObject;

/**
 * Contains a valid international call prefix for a country.
 */
class CallPrefix
{
    /**
     * @var int
     */
    protected $callPrefix;
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Country\Exception\CountryConstraintException
     */
    public function __construct(int $callPrefix)
    {
    }
    public function getValue(): int
    {
    }
}
