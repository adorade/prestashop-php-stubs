<?php

namespace PrestaShop\PrestaShop\Adapter\Feature\Validate;

/**
 * Validates FeatureValue properties using legacy object model
 */
class FeatureValueValidator extends \PrestaShop\PrestaShop\Adapter\AbstractObjectModelValidator
{
    /**
     * @param \FeatureValue $featureValue
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Feature\Exception\FeatureValueConstraintException
     */
    public function validate(\FeatureValue $featureValue): void
    {
    }
}
