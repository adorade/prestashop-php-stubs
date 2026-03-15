<?php

namespace PrestaShop\PrestaShop\Adapter\OrderReturnState\CommandHandler;

/**
 * Handles command that adds new order return state
 *
 * @internal
 */
final class AddOrderReturnStateHandler extends \PrestaShop\PrestaShop\Adapter\OrderReturnState\CommandHandler\AbstractOrderReturnStateHandler implements \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\CommandHandler\AddOrderReturnStateHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Command\AddOrderReturnStateCommand $command)
    {
    }
}
