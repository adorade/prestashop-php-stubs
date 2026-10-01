<?php

namespace PrestaShop\PrestaShop\Adapter\AttributeGroup\QueryHandler;

abstract class AbstractAttributeGroupQueryHandler
{
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository
     */
    protected $attributeRepository;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\AttributeGroup\Repository\AttributeGroupRepository
     */
    protected $attributeGroupRepository;
    public function __construct(\PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository, \PrestaShop\PrestaShop\Adapter\AttributeGroup\Repository\AttributeGroupRepository $attributeGroupRepository)
    {
    }
    /**
     * @param array<int, \AttributeGroup> $attributeGroups
     * @param array<int, array<int, \ProductAttribute>> $attributes
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\QueryResult\AttributeGroup[]
     */
    protected function formatAttributeGroupsList(array $attributeGroups, array $attributes): array
    {
    }
}
