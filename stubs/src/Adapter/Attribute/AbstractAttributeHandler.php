<?php

namespace PrestaShop\PrestaShop\Adapter\Attribute;

/**
 * Provides common methods for attribute command/query handlers
 */
abstract class AbstractAttributeHandler
{
    /**
     * @param AttributeId $attributeId
     *
     * @return ProductAttribute
     *
     * @throws AttributeException
     */
    protected function getAttributeById($attributeId)
    {
    }
    /**
     * @param ProductAttribute $attribute
     *
     * @return bool
     *
     * @throws AttributeException
     */
    protected function deleteAttribute(\ProductAttribute $attribute)
    {
    }
}
