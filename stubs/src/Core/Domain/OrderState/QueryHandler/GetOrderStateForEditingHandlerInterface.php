<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderState\QueryHandler;

/**
 * Interface for service that gets order state data for editing
 */
interface GetOrderStateForEditingHandlerInterface
{
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\OrderState\QueryResult\EditableOrderState
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderState\Query\GetOrderStateForEditing $query);
}
