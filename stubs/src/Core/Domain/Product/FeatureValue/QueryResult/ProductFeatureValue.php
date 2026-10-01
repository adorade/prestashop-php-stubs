<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\QueryResult;

/**
 * Transfers feature value data in query result
 */
class ProductFeatureValue
{
    /**
     * @param int $featureId
     * @param int $featureValueId
     * @param array $localizedValues
     * @param bool $custom
     */
    public function __construct(int $featureId, int $featureValueId, array $localizedValues, bool $custom)
    {
    }
    /**
     * @return int
     */
    public function getFeatureId(): int
    {
    }
    /**
     * @return int
     */
    public function getFeatureValueId(): int
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedValues(): array
    {
    }
    /**
     * @return bool
     */
    public function isCustom(): bool
    {
    }
}
