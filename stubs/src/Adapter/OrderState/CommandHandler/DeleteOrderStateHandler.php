<?php

namespace PrestaShop\PrestaShop\Adapter\OrderState\CommandHandler;

/**
 * Handles command which deletes order states
 */
class DeleteOrderStateHandler extends \PrestaShop\PrestaShop\Adapter\OrderState\CommandHandler\AbstractOrderStateHandler implements \PrestaShop\PrestaShop\Core\Domain\OrderState\CommandHandler\DeleteOrderStateHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderState\Command\DeleteOrderStateCommand $command): void
    {
    }
}
