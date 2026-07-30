<?php

namespace PrestaShop\PrestaShop\Adapter\Media;

/**
 * This class will provide Media servers configuration for a Shop.
 */
class MediaServerConfiguration implements \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface
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
     * @param array $configuration
     *
     * @return array<int, array<string, array|string>>|bool
     */
    public function validateConfiguration(array $configuration)
    {
    }
}
