<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\ValueObject;

/**
 * Provides country id value
 */
class CountryId implements \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryIdInterface
{
    /**
     * @param int $id
     *
     * @throws CountryConstraintException
     */
    public function __construct(int $id)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
