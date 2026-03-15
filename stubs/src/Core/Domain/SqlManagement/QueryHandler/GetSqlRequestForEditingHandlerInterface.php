<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\QueryHandler;

interface GetSqlRequestForEditingHandlerInterface
{
    /**
     * @param GetSqlRequestForEditing $query
     *
     * @return EditableSqlRequest
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Query\GetSqlRequestForEditing $query);
}
