<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\QueryHandler;

interface GetFeatureValueForEditingHandlerInterface
{
    /**
     * @param GetFeatureValueForEditing $query
     *
     * @return EditableFeatureValue
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Feature\Query\GetFeatureValueForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Feature\QueryResult\EditableFeatureValue;
}
