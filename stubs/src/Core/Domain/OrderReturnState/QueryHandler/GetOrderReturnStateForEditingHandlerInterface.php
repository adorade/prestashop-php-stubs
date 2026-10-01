<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturnState\QueryHandler;

/**
 * Interface for service that gets order return state data for editing
 */
interface GetOrderReturnStateForEditingHandlerInterface
{
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\QueryResult\EditableOrderReturnState
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Query\GetOrderReturnStateForEditing $query);
}
