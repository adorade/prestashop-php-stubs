<?php

namespace PrestaShop\PrestaShop\Adapter\Country;

/**
 * Abstract country handler
 */
class AbstractCountryHandler
{
    /**
     * @param \Country $country
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Country\Exception\CountryConstraintException
     * @throws \PrestaShopException
     */
    protected function validateCountryFields(\Country $country): void
    {
    }
}
