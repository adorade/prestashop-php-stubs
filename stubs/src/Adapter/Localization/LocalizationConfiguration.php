<?php

namespace PrestaShop\PrestaShop\Adapter\Localization;

/**
 * Class LocalizationConfiguration is responsible for 'Improve > International > Localization' page
 * 'Configuration' form data.
 */
class LocalizationConfiguration implements \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface
{
    /**
     * @param Configuration $configuration
     * @param LanguageActivatorInterface $languageActivator
     * @param CurrencyManager $currencyManager
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Configuration $configuration, \PrestaShop\PrestaShop\Core\Language\LanguageActivatorInterface $languageActivator, \PrestaShop\PrestaShop\Adapter\Currency\CurrencyManager $currencyManager)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getConfiguration()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function updateConfiguration(array $config)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function validateConfiguration(array $config)
    {
    }
}
