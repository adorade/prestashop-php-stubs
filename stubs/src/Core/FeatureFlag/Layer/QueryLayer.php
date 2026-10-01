<?php

namespace PrestaShop\PrestaShop\Core\FeatureFlag\Layer;

class QueryLayer implements \PrestaShop\PrestaShop\Core\FeatureFlag\TypeLayerInterface
{
    public function __construct(private \PrestaShop\PrestaShop\Core\EnvironmentInterface $environment, private \Symfony\Component\HttpFoundation\RequestStack $requestStack)
    {
    }
    /**
     * {@inheritdoc}
     */
    public static function getTypeName(): string
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isReadonly(): bool
    {
    }
    /**
     * Retrieve the var name of this feature flag.
     */
    public function getVarName(string $featureFlagName): string
    {
    }
    /**
     * {@inheritdoc}
     */
    public function canBeUsed(string $featureFlagName): bool
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isEnabled(string $featureFlagName): bool
    {
    }
    /**
     * {@inheritdoc}
     */
    public function enable(string $featureFlagName): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function disable(string $featureFlagName): void
    {
    }
}
