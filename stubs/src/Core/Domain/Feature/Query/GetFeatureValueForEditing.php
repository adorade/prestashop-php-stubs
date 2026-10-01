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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Feature\Exception\InvalidFeatureValueIdException
     */
    public function __construct(int $featureValueId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId
     */
    public function getFeatureValueId(): \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId
    {
    }
}
