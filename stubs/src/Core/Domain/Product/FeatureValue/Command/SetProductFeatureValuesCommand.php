<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\Command;

/**
 * Sets product feature values
 */
class SetProductFeatureValuesCommand
{
    /**
     * Set product feature values, expected format is:
     * $featureValues = [
     *      ['feature_id' => 2, 'feature_value_id' => 3], // Associate predefined feature value
     *      ['feature_id' => 2, 'custom_values' => [1 => 'Custom']], // Create new custom value
     *      ['feature_id' => 2, 'feature_value_id' => 5, 'custom_values' => [1 => 'Custom']], // Updates existing custom value
     * ];
     *
     * @param int $productId
     * @param array $featureValues
     *
     * @throws InvalidProductFeatureValuesFormatException
     * @throws ProductConstraintException
     */
    public function __construct(int $productId, array $featureValues)
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return ProductFeatureValue[]
     */
    public function getFeatureValues(): array
    {
    }
}
