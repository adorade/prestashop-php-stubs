<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\Command;

class UpdateProductImageCommand
{
    public function __construct(int $imageId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    public function getImageId(): \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId
    {
    }
    public function getFilePath(): ?string
    {
    }
    public function setFilePath(?string $filePath): self
    {
    }
    public function isCover(): ?bool
    {
    }
    public function setIsCover(?bool $isCover): self
    {
    }
    /**
     * @return array<int, string>|null
     */
    public function getLocalizedLegends(): ?array
    {
    }
    /**
     * @param array<int, string>|null $localizedLegends
     *
     * @return self
     */
    public function setLocalizedLegends(?array $localizedLegends): self
    {
    }
    public function getPosition(): ?int
    {
    }
    public function setPosition(?int $position): self
    {
    }
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}
