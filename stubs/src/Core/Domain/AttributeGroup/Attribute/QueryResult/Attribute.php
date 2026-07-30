<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\QueryResult;

class Attribute
{
    /**
     * @param int $attributeId
     * @param int $position
     * @param string $color
     * @param string[] $localizedNames key => value pairs where each key represents language id
     */
    public function __construct(int $attributeId, int $position, string $color, array $localizedNames, string $textureFilePath = null)
    {
    }
    /**
     * @return int
     */
    public function getAttributeId(): int
    {
    }
    /**
     * @return int
     */
    public function getPosition(): int
    {
    }
    /**
     * @return string
     */
    public function getColor(): string
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedNames(): array
    {
    }
    public function getTextureFilePath(): ?string
    {
    }
}
