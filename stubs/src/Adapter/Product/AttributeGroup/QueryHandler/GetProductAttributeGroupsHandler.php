<?php

namespace PrestaShop\PrestaShop\Adapter\Product\AttributeGroup\QueryHandler;

/**
 * Handles the query GetProductAttributeGroups using adapter repository
 */
class GetProductAttributeGroupsHandler extends \PrestaShop\PrestaShop\Adapter\AttributeGroup\QueryHandler\AbstractAttributeGroupQueryHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\AttributeGroup\QueryHandler\GetProductAttributeGroupsHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository, \PrestaShop\PrestaShop\Adapter\AttributeGroup\Repository\AttributeGroupRepository $attributeGroupRepository, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\AttributeGroup\Query\GetProductAttributeGroups $query): array
    {
    }
}
