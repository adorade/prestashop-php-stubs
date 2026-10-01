<?php

namespace PrestaShop\PrestaShop\Core\FeatureFlag;

interface TypeLayerInterface
{
    /**
     * Get type name of this handler.
     */
    public static function getTypeName(): string;
    /**
     * Define is this handler can change feature flag status.
     */
    public function isReadonly(): bool;
    /**
     * Define is this handler can be used.
     */
    public function canBeUsed(string $featureFlagName): bool;
    /**
     * Retrieve if the feature flag is enabled.
     */
    public function isEnabled(string $featureFlagName): bool;
    /**
     * Enable the feature flag with this handler method.
     */
    public function enable(string $featureFlagName): void;
    /**
     * Disable the feature flag with this handler method.
     */
    public function disable(string $featureFlagName): void;
}
