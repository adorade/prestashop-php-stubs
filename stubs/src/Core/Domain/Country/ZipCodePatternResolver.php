<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country;

/**
 * Call responsible for resolving country zip code format and returning it as other usable patterns
 */
final class ZipCodePatternResolver implements \PrestaShop\PrestaShop\Core\Domain\Country\ZipCodePatternResolverInterface
{
    /**
     * @param string $format
     * @param string $isoCode
     *
     * @return string
     */
    public function getRegexPattern(string $format, string $isoCode): string
    {
    }
    /**
     * @param string $format
     * @param string $isoCode
     *
     * @return string
     */
    public function getHumanReadablePattern(string $format, string $isoCode): string
    {
    }
}
