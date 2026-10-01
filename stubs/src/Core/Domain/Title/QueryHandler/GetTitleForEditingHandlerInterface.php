<?php

namespace PrestaShop\PrestaShop\Core\Domain\Title\QueryHandler;

/**
 * Defines contract for GetTitleForEditingHandler
 */
interface GetTitleForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Title\Query\GetTitleForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Title\QueryResult\EditableTitle
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Title\Query\GetTitleForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Title\QueryResult\EditableTitle;
}
