<?php

namespace PrestaShop\PrestaShop\Adapter\Attribute;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * Admin controller wrapper for new Architecture, about Category admin controller.
 */
class AdminAttributeGeneratorControllerWrapper
{
    public function __construct()
    {
    }
    /**
     * Generate product attributes.
     *
     * @param object $product The product
     * @param array $options The array with all attributes combinations
     */
    public function processGenerate($product, $options)
    {
    }
    public function createCombinations(array $list): array
    {
    }
    /**
     * Delete a product attribute.
     *
     * @param int $idAttribute The attribute ID
     * @param int $idProduct The product ID
     *
     * @return array|bool
     */
    public function ajaxProcessDeleteProductAttribute($idAttribute, $idProduct)
    {
    }
}
