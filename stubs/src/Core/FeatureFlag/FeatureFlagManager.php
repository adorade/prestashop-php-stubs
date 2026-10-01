<?php

namespace PrestaShop\PrestaShop\Core\FeatureFlag;

class FeatureFlagManager implements \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagStateCheckerInterface, \Symfony\Contracts\Service\ResetInterface
{
    public function __construct(
        #[\Symfony\Component\DependencyInjection\Attribute\TaggedLocator(\PrestaShop\PrestaShop\Core\FeatureFlag\TypeLayerInterface::class, defaultIndexMethod: 'getTypeName')]
        private readonly \Psr\Container\ContainerInterface $locator,
        private readonly \PrestaShopBundle\Entity\Repository\FeatureFlagRepository $featureFlagRepository
    )
    {
    }
    /**
     * Get type of handler used by this feature flag.
     */
    public function getUsedType(string $featureFlagName): string
    {
    }
    /**
     * Is the handler used by this feature flag read only?
     */
    public function isReadonly(string $featureFlagName): bool
    {
    }
    /**
     * Is this feature flag enable?
     */
    public function isEnabled(string $featureFlagName): bool
    {
    }
    /**
     * Is this feature flag disable?
     */
    public function isDisabled(string $featureFlagName): bool
    {
    }
    /**
     * Enable the feature flag by his handler.
     */
    public function enable(string $featureFlagName): void
    {
    }
    /**
     * Disable the feature flag by his handler.
     */
    public function disable(string $featureFlagName): void
    {
    }
    public function reset()
    {
    }
}
