<?php

namespace PrestaShop\PrestaShop\Adapter\Configuration;

/**
 * This class will manage Logs configuration for a Shop.
 */
class DatabaseLogsConfiguration implements \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface
{
    public function __construct(private \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
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
