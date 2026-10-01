<?php

namespace PrestaShop\PrestaShop\Core\FeatureFlag;

interface FeatureFlagStateCheckerInterface
{
    /**
     * Retrieve if the feature flag is enabled.
     */
    public function isEnabled(string $featureFlagName): bool;
    /**
     * Retrieve if the feature flag is enabled.
     */
    public function isDisabled(string $featureFlagName): bool;
}
