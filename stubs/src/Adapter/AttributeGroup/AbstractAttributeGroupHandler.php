<?php

namespace PrestaShop\PrestaShop\Adapter\AttributeGroup;

/**
 * Provides reusable methods for attribute group handlers
 */
abstract class AbstractAttributeGroupHandler
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId $attributeGroupId
     *
     * @return \AttributeGroup
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Exception\AttributeGroupException
     */
    protected function getAttributeGroupById($attributeGroupId)
    {
    }
    /**
     * @param \AttributeGroup $attributeGroup
     *
     * @return bool
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Exception\AttributeGroupException
     */
    protected function deleteAttributeGroup(\AttributeGroup $attributeGroup)
    {
    }
}
