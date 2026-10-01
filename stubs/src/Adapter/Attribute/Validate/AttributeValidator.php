<?php

namespace PrestaShop\PrestaShop\Adapter\Attribute\Validate;

/**
 * Validates attribute properties using legacy object model
 */
class AttributeValidator extends \PrestaShop\PrestaShop\Adapter\AbstractObjectModelValidator
{
    public function __construct(private \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopRepository $shopRepository)
    {
    }
    /**
     * @param \ProductAttribute $attribute
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function validate(\ProductAttribute $attribute): void
    {
    }
}
