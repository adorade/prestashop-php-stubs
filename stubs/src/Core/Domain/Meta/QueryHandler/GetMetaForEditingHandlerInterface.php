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
     * @param \PrestaShop\PrestaShop\Core\Domain\Meta\Query\GetMetaForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Meta\QueryResult\EditableMeta
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Meta\Query\GetMetaForEditing $query);
}
