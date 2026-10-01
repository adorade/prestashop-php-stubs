<?php

namespace PrestaShop\PrestaShop\Core\Domain\State\QueryHandler;

/**
 * Defines contract for GetStateForEditingHandler
 */
interface GetStateForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\State\Query\GetStateForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\State\QueryResult\EditableState
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\State\Query\GetStateForEditing $query): \PrestaShop\PrestaShop\Core\Domain\State\QueryResult\EditableState;
}
