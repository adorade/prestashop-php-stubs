<?php

namespace PrestaShop\PrestaShop\Adapter\State;

class CountryStateByIsoCodeProvider
{
    /**
     * @param string $isoCode
     * @param int|null $countryId
     *
     * @return int
     */
    public function getStateIdByIsoCode(string $isoCode, ?int $countryId = null): int
    {
    }
}
