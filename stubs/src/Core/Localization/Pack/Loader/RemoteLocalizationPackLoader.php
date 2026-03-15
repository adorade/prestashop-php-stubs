<?php

namespace PrestaShop\PrestaShop\Core\Localization\Pack\Loader;

/**
 * Class RemoteLocalizationPackLoader is responsible for loading localization pack data from prestashop.com.
 */
final class RemoteLocalizationPackLoader extends \PrestaShop\PrestaShop\Core\Localization\Pack\Loader\AbstractLocalizationPackLoader
{
    /**
     * @param ConfigurationInterface $configuration
     * @param Version $version
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \PrestaShop\PrestaShop\Core\Foundation\Version $version)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getLocalizationPackList()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getLocalizationPack($countryIso)
    {
    }
}
