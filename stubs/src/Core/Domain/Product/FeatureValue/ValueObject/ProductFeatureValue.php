<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\ValueObject;

/**
 * Transfers feature value data in command
 */
class ProductFeatureValue
{
    /**
     * @param int $featureId
     * @param int|null $featureValueId
     * @param array|null $localizedCustomValues
     */
    public function __construct(int $featureId, ?int $featureValueId = null, ?array $localizedCustomValues = null)
    {
    }
    /**
     * @return FeatureId
     */
    public function getFeatureId(): \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId
    {
    }
    /**
     * @return FeatureValueId|null
     */
    public function getFeatureValueId(): ?\PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId
    {
    }
    /**
     * @param FeatureValueId $featureValueId
     */
    public function setFeatureValueId(\PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId $featureValueId): void
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedCustomValues(): ?array
    {
    }
}
