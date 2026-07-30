<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class CountryByIdChoiceProvider provides country choices with ID values.
 */
final class CountryByIdChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface, \PrestaShop\PrestaShop\Core\Form\FormChoiceAttributeProviderInterface
{
    /**
     * @param int $langId
     * @param CountryDataProvider $countryDataProvider
     */
    public function __construct($langId, \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider $countryDataProvider)
    {
    }
    /**
     * Get currency choices.
     *
     * @return array
     */
    public function getChoices()
    {
    }
    /**
     * @return array
     */
    public function getChoicesAttributes()
    {
    }
}
