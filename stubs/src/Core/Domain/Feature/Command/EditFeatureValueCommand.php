<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\Command;

/**
 * Class EditFeatureValueCommand is used to edit FeatureValue content
 */
class EditFeatureValueCommand
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
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId|null
     */
    public function getFeatureId(): ?\PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId
    {
    }
    /**
     * @param int $featureId
     *
     * @return $this
     */
    public function setFeatureId(int $featureId): self
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedValues(): ?array
    {
    }
    /**
     * @param array $localizedValues
     *
     * @return $this
     */
    public function setLocalizedValues(array $localizedValues): self
    {
    }
}
