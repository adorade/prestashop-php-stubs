<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\Query;

/**
 * Retrieves feature data for editing
 */
class GetFeatureForEditing
{
    /**
     * @param int $featureId
     */
    public function __construct($featureId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId
     */
    public function getFeatureId()
    {
    }
}
