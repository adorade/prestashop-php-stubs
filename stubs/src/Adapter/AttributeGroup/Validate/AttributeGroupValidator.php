<?php

namespace PrestaShop\PrestaShop\Adapter\AttributeGroup\Validate;

/**
 * Validates Attribute Group properties using legacy object model
 */
class AttributeGroupValidator extends \PrestaShop\PrestaShop\Adapter\AbstractObjectModelValidator
{
    public function __construct(private \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopRepository $shopRepository)
    {
    }
    /**
     * @param \AttributeGroup $attributeGroup
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function validate(\AttributeGroup $attributeGroup): void
    {
    }
}
