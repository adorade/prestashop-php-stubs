<?php

namespace PrestaShopBundle\Entity\Repository;

class FeatureFlagRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * Get a feature flag entity by its name.
     *
     * @param string $featureFlagName
     *
     * @return FeatureFlag|null return null if feature flag cannot be found
     */
    public function getByName(string $featureFlagName): ?\PrestaShopBundle\Entity\FeatureFlag
    {
    }
    /**
     * Check if a feature flag is enabled based on its name (if it doesn't exist false is returned).
     *
     * @param string $featureFlagName
     *
     * @return bool
     */
    public function isEnabled(string $featureFlagName): bool
    {
    }
    /**
     * Check if a feature flag is enabled based on its name (if it doesn't exist false is returned).
     *
     * @param string $featureFlagName
     *
     * @return bool
     */
    public function isDisabled(string $featureFlagName): bool
    {
    }
    /**
     * Enable a feature flag by its flag name.
     *
     * @param string $featureFlagName
     */
    public function enable(string $featureFlagName): void
    {
    }
    /**
     * Disable a feature flag by its flag name.
     *
     * @param string $featureFlagName
     */
    public function disable(string $featureFlagName): void
    {
    }
}
