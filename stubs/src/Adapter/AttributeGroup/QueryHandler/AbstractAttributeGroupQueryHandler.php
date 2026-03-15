<?php

namespace PrestaShop\PrestaShop\Adapter\AttributeGroup\QueryHandler;

abstract class AbstractAttributeGroupQueryHandler
{
    /**
     * @var AttributeRepository
     */
    protected $attributeRepository;
    /**
     * @var AttributeGroupRepository
     */
    protected $attributeGroupRepository;
    public function __construct(\PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository, \PrestaShop\PrestaShop\Adapter\AttributeGroup\Repository\AttributeGroupRepository $attributeGroupRepository)
    {
    }
    /**
     * @param array<int, AttributeGroupObjectModel> $attributeGroups
     * @param array<int, array<int, AttributeObjectModel>> $attributes
     *
     * @return AttributeGroup[]
     */
    protected function formatAttributeGroupsList(array $attributeGroups, array $attributes): array
    {
    }
}
