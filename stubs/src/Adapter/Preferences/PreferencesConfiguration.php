<?php

namespace PrestaShop\PrestaShop\Adapter\Preferences;

/**
 * This class will provide Shop Preferences configuration.
 */
class PreferencesConfiguration implements \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Configuration $configuration)
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
    public function updateConfiguration(array $configuration)
    {
    }
    /**
     * Validate the SSL configuration can be disabled if the SameSite Cookie
     * is not settled to None
     *
     * @param array $configuration
     *
     * @return bool
     */
    protected function validateSameSiteConfiguration(array $configuration): bool
    {
    }
    /**
     * {@inheritdoc}
     */
    public function validateConfiguration(array $configuration)
    {
    }
}
