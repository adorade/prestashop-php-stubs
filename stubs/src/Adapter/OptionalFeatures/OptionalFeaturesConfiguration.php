<?php

namespace PrestaShop\PrestaShop\Adapter\OptionalFeatures;

/**
 * This class will provide Optional features configuration for a Shop.
 */
class OptionalFeaturesConfiguration implements \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Feature\CombinationFeature $combinationFeature, \PrestaShop\PrestaShop\Adapter\Feature\FeatureFeature $featureFeature, \PrestaShop\PrestaShop\Adapter\Feature\GroupFeature $groupFeature)
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
