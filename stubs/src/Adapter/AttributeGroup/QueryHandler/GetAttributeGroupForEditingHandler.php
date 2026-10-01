<?php

namespace PrestaShop\PrestaShop\Adapter\AttributeGroup\QueryHandler;

/**
 * Handles query which gets attribute group for editing
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetAttributeGroupForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\QueryHandler\GetAttributeGroupForEditingHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\AttributeGroup\Repository\AttributeGroupRepository $attributeGroupRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Query\GetAttributeGroupForEditing $query): \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\QueryResult\EditableAttributeGroup
    {
    }
}
