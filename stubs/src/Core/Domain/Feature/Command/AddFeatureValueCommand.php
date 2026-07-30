<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\Command;

/**
 * Class AddFeatureValueCommand is used to add predefined feature values (as opposed to custom values which are
 * only assigned to a Specific product)
 */
class AddFeatureValueCommand
{
    /**
     * @param int $featureId
     * @param string[] $localizedValues
     */
    public function __construct(int $featureId, array $localizedValues)
    {
    }
    /**
     * @return FeatureId
     */
    public function getFeatureId(): \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId
    {
    }
    /**
     * @return array
     */
    public function getLocalizedValues(): array
    {
    }
}
