<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\QueryHandler;

/**
 * Describes feature for editing handler.
 */
interface GetFeatureForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Feature\Query\GetFeatureForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Feature\QueryResult\EditableFeature
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Feature\Query\GetFeatureForEditing $query);
}
