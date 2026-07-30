<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination;

/**
 * Transfers data of single combination attributes
 */
class CombinationAttributeInformation
{
    /**
     * @param int $attributeGroupId
     * @param string $attributeGroupName
     * @param int $attributeId
     * @param string $attributeName
     */
    public function __construct(int $attributeGroupId, string $attributeGroupName, int $attributeId, string $attributeName)
    {
    }
    /**
     * @return int
     */
    public function getAttributeGroupId(): int
    {
    }
    /**
     * @return string
     */
    public function getAttributeGroupName(): string
    {
    }
    /**
     * @return int
     */
    public function getAttributeId(): int
    {
    }
    /**
     * @return string
     */
    public function getAttributeName(): string
    {
    }
}
