<?php

namespace PrestaShop\PrestaShop\Core\Domain\Meta\QueryHandler;

/**
 * Interface GetMetaForEditingHandlerInterface defines contract for GetMetaForEditingHandler.
 */
interface GetMetaForEditingHandlerInterface
{
    /**
     * Gets data related with meta entity.
     *
     * @param GetMetaForEditing $query
     *
     * @return EditableMeta
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Meta\Query\GetMetaForEditing $query);
}
