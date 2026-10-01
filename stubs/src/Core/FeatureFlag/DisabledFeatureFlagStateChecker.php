<?php

namespace PrestaShop\PrestaShop\Core\FeatureFlag;

/**
 * This checker is used in conditions when no DB or container is accessible so we
 * simulate that all the feature flags are disabled.
 */
class DisabledFeatureFlagStateChecker implements \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagStateCheckerInterface
{
    public function isEnabled(string $featureFlagName): bool
    {
    }
    public function isDisabled(string $featureFlagName): bool
    {
    }
}
