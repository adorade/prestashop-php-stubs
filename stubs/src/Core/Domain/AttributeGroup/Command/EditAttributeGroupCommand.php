<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Command;

/**
 * Edits existing attribute group
 */
class EditAttributeGroupCommand
{
    public function __construct(int $attributeGroupId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId
     */
    public function getAttributeGroupId(): \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId
    {
    }
    public function getLocalizedNames(): ?array
    {
    }
    /**
     * @param string[] $localizedNames
     *
     * @return $this
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Exception\AttributeGroupConstraintException
     */
    public function setLocalizedNames(array $localizedNames): self
    {
    }
    public function getLocalizedPublicNames(): ?array
    {
    }
    /**
     * @param string[] $localizedPublicNames
     *
     * @return $this
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Exception\AttributeGroupConstraintException
     */
    public function setLocalizedPublicNames(array $localizedPublicNames): self
    {
    }
    public function getType(): ?\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupType
    {
    }
    public function setType(string $type): self
    {
    }
    public function getAssociatedShopIds(): ?array
    {
    }
    /**
     * @param int[] $associatedShopIds
     *
     * @return $this
     */
    public function setAssociatedShopIds(array $associatedShopIds): self
    {
    }
}
