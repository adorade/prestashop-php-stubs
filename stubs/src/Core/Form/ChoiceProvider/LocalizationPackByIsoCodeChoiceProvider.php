<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class LocalizationPackByIsoCodeChoiceProvider provides localization pack choices with iso code values.
 */
final class LocalizationPackByIsoCodeChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param LocalizationPackLoaderInterface $remoteLocalizationPackLoader
     * @param LocalizationPackLoaderInterface $localLocalizationPackLoader
     * @param ConfigurationInterface $configuration
     * @param TranslatorInterface $translator
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\Pack\Loader\LocalizationPackLoaderInterface $remoteLocalizationPackLoader, \PrestaShop\PrestaShop\Core\Localization\Pack\Loader\LocalizationPackLoaderInterface $localLocalizationPackLoader, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * Get localization pack choices.
     *
     * @return array
     */
    public function getChoices()
    {
    }
}
