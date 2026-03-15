<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class provides configurable country choices with ID values.
 */
final class CountryByIdConfigurableChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface
{
    /**
     * @param int $langId
     * @param CountryDataProvider $countryDataProvider
     */
    public function __construct(int $langId, \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider $countryDataProvider)
    {
    }
    /**
     * Get country choices.
     *
     * {@inheritdoc}
     */
    public function getChoices(array $options): array
    {
    }
}
