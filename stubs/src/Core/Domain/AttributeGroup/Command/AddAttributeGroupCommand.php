<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Command;

/**
 * Adds new attribute group
 */
class AddAttributeGroupCommand
{
    /**
     * @param string[] $localizedNames
     * @param array $localizedPublicNames
     * @param string $type
     * @param int[] $associatedShopIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Exception\AttributeGroupConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Exception\InvalidAttributeGroupTypeException
     */
    public function __construct(array $localizedNames, array $localizedPublicNames, string $type, array $associatedShopIds)
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
     * @return \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupType
     */
    public function getType(): \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupType
    {
    }
    /**
     * @return int[]
     */
    public function getAssociatedShopIds(): array
    {
    }
}
