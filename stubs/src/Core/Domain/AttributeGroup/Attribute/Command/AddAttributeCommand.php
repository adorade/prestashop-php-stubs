<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Command;

/**
 * Adds new attribute
 */
class AddAttributeCommand
{
    /**
     * @param array $localizedNames
     * @param int[] $associatedShopIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Exception\AttributeConstraintException
     */
    public function __construct(int $attributeGroupId, array $localizedNames, string $color, array $associatedShopIds = [])
    {
    }
    public function getAttributeGroupId(): \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId
    {
    }
    /**
     * @return array
     */
    public function getLocalizedNames(): array
    {
    }
    public function getColor(): string
    {
    }
    /**
     * @return int[]
     */
    public function getAssociatedShopIds(): array
    {
    }
    public function setTextureFilePath(string $pathName): void
    {
    }
    public function getTextureFilePath(): ?string
    {
    }
}
