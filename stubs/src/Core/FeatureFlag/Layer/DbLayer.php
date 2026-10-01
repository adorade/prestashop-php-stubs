<?php

namespace PrestaShop\PrestaShop\Core\FeatureFlag\Layer;

class DbLayer implements \PrestaShop\PrestaShop\Core\FeatureFlag\TypeLayerInterface
{
    public function __construct(protected readonly \PrestaShopBundle\Entity\Repository\FeatureFlagRepository $featureFlagRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isReadonly(): bool
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
