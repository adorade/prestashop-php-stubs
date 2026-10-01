<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\QueryResult;

/**
 * Stores attribute groups data that's needed for editing.
 */
class EditableAttributeGroup
{
    /**
     * @param int $attributeGroupId
     * @param string[] $name
     * @param array $publicName
     * @param string $type
     * @param int[] $associatedShopIds
     */
    public function __construct(int $attributeGroupId, array $name, array $publicName, string $type, array $associatedShopIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId
     */
    public function getAttributeGroupId(): \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId
    {
    }
    /**
     * @return string[]
     */
    public function getName(): array
    {
    }
    /**
     * @return int[]
     */
    public function getAssociatedShopIds(): array
    {
    }
    /**
     * @return array
     */
    public function getPublicName(): array
    {
    }
    /**
     * @return string
     */
    public function getType(): string
    {
    }
}
