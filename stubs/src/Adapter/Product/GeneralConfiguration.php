<?php

namespace PrestaShop\PrestaShop\Adapter\Product;

/**
 * This class loads and saves general configuration for product.
 */
class GeneralConfiguration implements \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface
{
    /**
     * @param Configuration $configuration
     * @param SpecificPricePriorityUpdater $specificPricePriorityUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Configuration $configuration, \PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Update\SpecificPricePriorityUpdater $specificPricePriorityUpdater)
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
    public function validateConfiguration(array $configuration)
    {
    }
}
