<?php

namespace PrestaShop\PrestaShop\Adapter\OrderState\QueryHandler;

/**
 * Handles command that gets orderState for editing
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetOrderStateForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\OrderState\QueryHandler\GetOrderStateForEditingHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderState\Query\GetOrderStateForEditing $query)
    {
    }
}
