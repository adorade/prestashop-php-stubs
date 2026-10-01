<?php

namespace PrestaShop\PrestaShop\Core\FeatureFlag\Layer;

class EnvLayer implements \PrestaShop\PrestaShop\Core\FeatureFlag\TypeLayerInterface
{
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
     * Retrieve the const name of this feature flag.
     */
    public function getConstName(string $featureFlagName): string
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
