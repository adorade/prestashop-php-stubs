<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\QueryResult;

class AttributeGroup
{
    /**
     * @param int $attributeGroupId
     * @param string[] $localizedNames
     * @param string[] $localizedPublicNames
     * @param string $groupType
     * @param bool $isColorGroup
     * @param int $position
     * @param Attribute[]|null $attributes
     */
    public function __construct(int $attributeGroupId, array $localizedNames, array $localizedPublicNames, string $groupType, bool $isColorGroup, int $position, ?array $attributes = null)
    {
    }
    /**
     * @return int
     */
    public function getAttributeGroupId(): int
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedNames(): array
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedPublicNames(): array
    {
    }
    /**
     * @return string
     */
    public function getGroupType(): string
    {
    }
    /**
     * @return bool
     */
    public function isColorGroup(): bool
    {
    }
    /**
     * @return int
     */
    public function getPosition(): int
    {
    }
    /**
     * Returns list of attributes since it's optional returns null when attributes were
     * not queried. Empty array however means that the group contains no attributes.
     *
     * @return Attribute[]|null
     */
    public function getAttributes(): ?array
    {
    }
}
