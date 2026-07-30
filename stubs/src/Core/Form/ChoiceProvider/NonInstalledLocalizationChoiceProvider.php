<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class NonInstalledLocalizationChoiceProvider provides non installed localization choices
 * with name keys and iso code values.
 */
final class NonInstalledLocalizationChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param array $languagePackList
     * @param LanguageValidatorInterface $languageValidator
     * @param LanguageDataProvider $languageProvider
     */
    public function __construct(array $languagePackList, \PrestaShop\PrestaShop\Core\Language\LanguageValidatorInterface $languageValidator, \PrestaShop\PrestaShop\Adapter\Language\LanguageDataProvider $languageProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
    }
}
