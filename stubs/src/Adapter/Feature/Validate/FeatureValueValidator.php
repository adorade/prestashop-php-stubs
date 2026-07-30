<?php

namespace PrestaShop\PrestaShop\Adapter\Feature\Validate;

/**
 * Validates FeatureValue properties using legacy object model
 */
class FeatureValueValidator extends \PrestaShop\PrestaShop\Adapter\AbstractObjectModelValidator
{
    /**
     * @param FeatureValue $featureValue
     *
     * @throws CoreException
     * @throws FeatureValueConstraintException
     */
    public function validate(\FeatureValue $featureValue): void
    {
    }
}
