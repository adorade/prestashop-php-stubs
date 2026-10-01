<?php

namespace PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Query;

/**
 * Retrieves all data for an extra property definition for use in the BO edit form.
 *
 * Returns an EditableExtraPropertyDefinition DTO including structural fields
 * (entity_name, property_name, type, scope, size, sql_index) which are shown
 * as read-only in the edit form, plus all editable metadata.
 */
class GetExtraPropertyDefinitionForEditing
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\ValueObject\ExtraPropertyDefinitionId
     */
    protected \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\ValueObject\ExtraPropertyDefinitionId $id;
    /**
     * @param int $id
     */
    public function __construct(int $id)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\ValueObject\ExtraPropertyDefinitionId
     */
    public function getId(): \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\ValueObject\ExtraPropertyDefinitionId
    {
    }
}
