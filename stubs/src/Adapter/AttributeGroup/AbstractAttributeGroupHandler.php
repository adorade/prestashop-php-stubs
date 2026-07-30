<?php

namespace PrestaShop\PrestaShop\Adapter\AttributeGroup;

/**
 * Provides reusable methods for attribute group handlers
 */
abstract class AbstractAttributeGroupHandler
{
    /**
     * @param AttributeGroupId $attributeGroupId
     *
     * @return AttributeGroup
     *
     * @throws AttributeGroupException
     */
    protected function getAttributeGroupById($attributeGroupId)
    {
    }
    /**
     * @param AttributeGroup $attributeGroup
     *
     * @return bool
     *
     * @throws AttributeGroupException
     */
    protected function deleteAttributeGroup(\AttributeGroup $attributeGroup)
    {
    }
}
