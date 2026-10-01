<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\QueryHandler;

/**
 * Interface for service that gets employee data for editing
 */
interface GetEmployeeForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Employee\Query\GetEmployeeForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Employee\QueryResult\EditableEmployee
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Employee\Query\GetEmployeeForEditing $query);
}
