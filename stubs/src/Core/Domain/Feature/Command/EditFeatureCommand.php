<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\Command;

/**
 * Edit feature with given data.
 */
class EditFeatureCommand
{
    /**
     * @param int $featureId
     */
    public function __construct(int $featureId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId
     */
    public function getFeatureId(): \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureId
    {
    }
    /**
     * @return string[]|null
     */
    public function getLocalizedNames(): ?array
    {
    }
    /**
     * @param string[] $localizedNames
     *
     * @return EditFeatureCommand
     */
    public function setLocalizedNames(array $localizedNames): self
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[]|null
     */
    public function getAssociatedShopIds(): ?array
    {
    }
    /**
     * @param int[] $associatedShopIds
     *
     * @return EditFeatureCommand
     */
    public function setAssociatedShopIds(array $associatedShopIds): self
    {
    }
}
