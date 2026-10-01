<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\QueryResult;

/**
 * Stores attributes data that's needed for editing.
 */
class EditableAttribute
{
    public function __construct(private readonly int $attributeId, private readonly int $attributeGroupId, private readonly array $localizedNames, private readonly string $color, private readonly array $shopAssociationIds, private readonly ?array $textureImage)
    {
    }
    public function getAttributeId(): int
    {
    }
    public function getAttributeGroupId(): int
    {
    }
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
    /**
     * @return mixed
     */
    public function getTextureImage()
    {
    }
}
