<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\Command;

/**
 * Adds new feature
 */
class AddFeatureCommand
{
    /**
     * @param string[] $localizedNames
     * @param int[] $shopAssociation
     */
    public function __construct(array $localizedNames, array $shopAssociation = [])
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedNames()
    {
    }
    /**
     * @return int[]
     */
    public function getShopAssociation()
    {
    }
}
