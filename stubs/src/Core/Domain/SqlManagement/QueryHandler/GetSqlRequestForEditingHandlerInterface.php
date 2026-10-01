<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\QueryHandler;

interface GetSqlRequestForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Query\GetSqlRequestForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\SqlManagement\EditableSqlRequest
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Query\GetSqlRequestForEditing $query);
}
