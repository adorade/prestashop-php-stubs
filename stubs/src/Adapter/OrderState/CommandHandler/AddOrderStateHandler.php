<?php

namespace PrestaShop\PrestaShop\Adapter\OrderState\CommandHandler;

/**
 * Handles command that adds new order state
 *
 * @internal
 */
final class AddOrderStateHandler extends \PrestaShop\PrestaShop\Adapter\OrderState\CommandHandler\AbstractOrderStateHandler implements \PrestaShop\PrestaShop\Core\Domain\OrderState\CommandHandler\AddOrderStateHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderState\Command\AddOrderStateCommand $command)
    {
    }
}
