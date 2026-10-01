<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Command;

/**
 * Edit existing attribute
 */
class EditAttributeCommand
{
    /**
     * @param int $attributeId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Exception\AttributeConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Exception\AttributeGroupConstraintException
     */
    public function __construct(int $attributeId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\ValueObject\AttributeId
     */
    public function getAttributeId(): \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\ValueObject\AttributeId
    {
    }
    public function getAttributeGroupId(): ?\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId
    {
    }
    public function setAttributeGroupId(int $attributeGroupId): self
    {
    }
    public function getLocalizedNames(): ?array
    {
    }
    public function setLocalizedNames(array $localizedNames): self
    {
    }
    /**
     * @return string
     */
    public function getColor(): ?string
    {
    }
    public function setColor(string $color): self
    {
    }
    /**
     * @return int[]
     */
    public function getAssociatedShopIds(): ?array
    {
    }
    public function setAssociatedShopIds(array $associatedShopIds): self
    {
    }
    /**
     * @param string $pathName
     */
    public function setTextureFilePath(string $pathName): void
    {
    }
    public function getTextureFilePath(): ?string
    {
    }
}
