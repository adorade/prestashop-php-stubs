<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\ValueObject;

/**
 * Provides country id value
 */
interface CountryIdInterface
{
    public function getValue(): int;
}
