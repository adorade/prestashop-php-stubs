<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\QueryHandler;

/**
 * Describes attribute group for editing handler.
 */
interface GetAttributeGroupForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Query\GetAttributeGroupForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\QueryResult\EditableAttributeGroup
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Query\GetAttributeGroupForEditing $query): \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\QueryResult\EditableAttributeGroup;
}
