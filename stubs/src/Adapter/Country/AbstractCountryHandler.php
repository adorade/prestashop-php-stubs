<?php

namespace PrestaShop\PrestaShop\Adapter\Country;

/**
 * Abstract country handler
 */
class AbstractCountryHandler
{
    /**
     * @param Country $country
     *
     * @throws CountryConstraintException
     * @throws PrestaShopException
     */
    protected function validateCountryFields(\Country $country): void
    {
    }
}
