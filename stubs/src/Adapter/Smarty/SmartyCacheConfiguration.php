<?php

namespace PrestaShop\PrestaShop\Adapter\Smarty;

/**
 * This class will manage Smarty configuration for a Shop.
 */
class SmartyCacheConfiguration implements \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface
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
     *
     * Note: 'smarty_console' and 'smarty_console_key' keys are not allowed for update.
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
