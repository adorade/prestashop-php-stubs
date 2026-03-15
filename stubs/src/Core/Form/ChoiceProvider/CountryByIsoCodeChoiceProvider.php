<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class CountryChoiceProvider is responsible for providing both enabled/disabled country choices with ISO code values.
 */
final class CountryByIsoCodeChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param int $langId
     * @param CountryDataProvider $countryDataProvider
     */
    public function __construct($langId, \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider $countryDataProvider)
    {
    }
    /**
     * Get country choices.
     *
     * @return array
     */
    public function getChoices()
    {
    }
}
