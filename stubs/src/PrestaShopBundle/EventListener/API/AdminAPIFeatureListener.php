<?php

namespace PrestaShopBundle\EventListener\API;

/**
 * Check the Admin API configuration
 */
class AdminAPIFeatureListener
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagManager $featureFlagManager, private readonly \PrestaShop\PrestaShop\Adapter\Feature\MultistoreFeature $multiStoreFeature, private readonly \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    public function onKernelRequest(\Symfony\Component\HttpKernel\Event\RequestEvent $event)
    {
    }
}
