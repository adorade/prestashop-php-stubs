<?php

namespace PrestaShop\PrestaShop\Core\Team\Employee\Configuration;

/**
 * Class EmployeeOptionsConfiguration handles configuration data for employee options.
 */
final class EmployeeOptionsConfiguration implements \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface
{
    /**
     * @param ConfigurationInterface $configuration
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \PrestaShop\PrestaShop\Core\Team\Employee\Configuration\OptionsCheckerInterface $optionsChecker)
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
