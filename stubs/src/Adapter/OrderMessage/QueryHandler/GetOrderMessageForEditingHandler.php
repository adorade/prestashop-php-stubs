<?php

namespace PrestaShop\PrestaShop\Adapter\OrderMessage\QueryHandler;

/**
 * Get order message for editing using object model
 *
 * @internal
 */
final class GetOrderMessageForEditingHandler extends \PrestaShop\PrestaShop\Adapter\OrderMessage\AbstractOrderMessageHandler implements \PrestaShop\PrestaShop\Core\Domain\OrderMessage\QueryHandler\GetOrderMessageForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\OrderMessage\Query\GetOrderMessageForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\OrderMessage\QueryResult\EditableOrderMessage
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderMessage\Query\GetOrderMessageForEditing $query): \PrestaShop\PrestaShop\Core\Domain\OrderMessage\QueryResult\EditableOrderMessage
    {
    }
}
