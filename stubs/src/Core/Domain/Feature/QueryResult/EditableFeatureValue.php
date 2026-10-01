<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\QueryResult;

/**
 * Stores feature value data that's needed for editing.
 */
class EditableFeatureValue
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId $featureValueId
     * @param \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId $featureId
     * @param string[] $localizedValues
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId $featureValueId, \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId $featureId, array $localizedValues)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId
     */
    public function getFeatureValueId(): \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId
     */
    public function getFeatureId(): \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedValues(): array
    {
    }
}
