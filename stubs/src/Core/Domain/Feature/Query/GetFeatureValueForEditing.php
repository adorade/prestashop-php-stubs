<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\Query;

/**
 * Retrieves feature value data for editing
 */
class GetFeatureValueForEditing
{
    /**
     * @param int $featureValueId
     *
     * @throws InvalidFeatureValueIdException
     */
    public function __construct(int $featureValueId)
    {
    }
    /**
     * @return FeatureValueId
     */
    public function getFeatureValueId(): \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId
    {
    }
}
