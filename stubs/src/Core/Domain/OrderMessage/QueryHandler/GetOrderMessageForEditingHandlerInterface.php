<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderMessage\QueryHandler;

/**
 * Interface for service that handles retrieving order message data
 */
interface GetOrderMessageForEditingHandlerInterface
{
    /**
     * @param GetOrderMessageForEditing $query
     *
     * @return EditableOrderMessage
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderMessage\Query\GetOrderMessageForEditing $query): \PrestaShop\PrestaShop\Core\Domain\OrderMessage\QueryResult\EditableOrderMessage;
}
