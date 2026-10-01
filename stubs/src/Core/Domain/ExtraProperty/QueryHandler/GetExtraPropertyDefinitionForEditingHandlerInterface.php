<?php

namespace PrestaShop\PrestaShop\Core\Domain\ExtraProperty\QueryHandler;

/**
 * Handler contract for GetExtraPropertyDefinitionForEditing.
 */
interface GetExtraPropertyDefinitionForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Query\GetExtraPropertyDefinitionForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\QueryResult\EditableExtraPropertyDefinition
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Query\GetExtraPropertyDefinitionForEditing $query): \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\QueryResult\EditableExtraPropertyDefinition;
}
