<?php

namespace PrestaShop\PrestaShop\Core\MailTemplate;

/**
 * Class MailThemeConfiguration is used to save Mail Theme settings
 * in "Design > Mail Theme" page.
 */
final class MailThemeConfiguration implements \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface
{
    /**
     * @param ConfigurationInterface $configuration
     * @param ThemeCatalogInterface $themeCatalog
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \PrestaShop\PrestaShop\Core\MailTemplate\ThemeCatalogInterface $themeCatalog)
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
     * {@inheritdoc}
     */
    public function validateConfiguration(array $configuration)
    {
    }
}
