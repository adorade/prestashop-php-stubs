<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\QueryHandler;

/**
 * Describes attribute for editing handler.
 */
interface GetAttributeForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Query\GetAttributeForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\QueryResult\EditableAttribute
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Query\GetAttributeForEditing $query): \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\QueryResult\EditableAttribute;
}
