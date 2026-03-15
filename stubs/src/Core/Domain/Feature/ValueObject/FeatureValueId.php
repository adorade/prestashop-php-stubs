<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject;

/**
 * Defines FeatureValue ID with it's constraints.
 */
class FeatureValueId
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
     * @return int
     */
    public function getValue(): int
    {
    }
}
