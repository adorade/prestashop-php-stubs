<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\Command;

/**
 * Edit feature with given data.
 */
class EditFeatureCommand
{
    /**
     * @param int $featureId
     */
    public function __construct($featureId)
    {
    }
    /**
     * @return FeatureId
     */
    public function getFeatureId()
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedNames()
    {
    }
    /**
     * @param string[] $localizedNames
     *
     * @return EditFeatureCommand
     */
    public function setLocalizedNames(array $localizedNames)
    {
    }
    /**
     * @return int[]|null
     */
    public function getAssociatedShopIds()
    {
    }
    /**
     * @param int[] $associatedShopIds
     *
     * @return EditFeatureCommand
     */
    public function setAssociatedShopIds($associatedShopIds)
    {
    }
}
