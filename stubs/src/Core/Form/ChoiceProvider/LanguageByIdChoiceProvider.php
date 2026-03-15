<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class LanguageByIdChoiceProvider provides active language choices with ID values.
 */
final class LanguageByIdChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface
{
    /**
     * LanguageByIdChoiceProvider constructor.
     *
     * @param LanguageDataProvider $languageDataProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Language\LanguageDataProvider $languageDataProvider)
    {
    }
    /**
     * Get active language choices for form.
     *
     * @return array
     */
    public function getChoices(array $options = [])
    {
    }
}
