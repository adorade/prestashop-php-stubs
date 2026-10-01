<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class LocalizationPackByIsoCodeChoiceProvider provides localization pack choices with iso code values.
 */
final class LocalizationPackByIsoCodeChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Localization\Pack\Loader\LocalizationPackLoaderInterface $remoteLocalizationPackLoader
     * @param \PrestaShop\PrestaShop\Core\Localization\Pack\Loader\LocalizationPackLoaderInterface $localLocalizationPackLoader
     * @param \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
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
