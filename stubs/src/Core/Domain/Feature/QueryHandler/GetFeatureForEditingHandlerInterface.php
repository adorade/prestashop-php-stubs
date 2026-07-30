<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\QueryHandler;

/**
 * Describes feature for editing handler.
 */
interface GetFeatureForEditingHandlerInterface
{
    /**
     * @param GetFeatureForEditing $query
     *
     * @return EditableFeature
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Feature\Query\GetFeatureForEditing $query);
}
