<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\QueryResult;

/**
 * Stores feature data that's needed for editing.
 */
class EditableFeature
{
    /**
     * @param FeatureId $featureId
     * @param string[] $name
     * @param int[] $shopAssociationIds
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId $featureId, array $name, array $shopAssociationIds)
    {
    }
    /**
     * @return FeatureId
     */
    public function getFeatureId()
    {
    }
    /**
     * @return string[]
     */
    public function getName()
    {
    }
    /**
     * @return int[]
     */
    public function getShopAssociationIds()
    {
    }
}
