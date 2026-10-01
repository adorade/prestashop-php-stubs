<?php

namespace PrestaShop\PrestaShop\Adapter\Attribute;

/**
 * Provides common methods for attribute command/query handlers
 */
abstract class AbstractAttributeHandler
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\ValueObject\AttributeId $attributeId
     *
     * @return \ProductAttribute
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Exception\AttributeException
     */
    protected function getAttributeById($attributeId)
    {
    }
    /**
     * @param \ProductAttribute $attribute
     *
     * @return bool
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Exception\AttributeException
     */
    protected function deleteAttribute(\ProductAttribute $attribute)
    {
    }
}
