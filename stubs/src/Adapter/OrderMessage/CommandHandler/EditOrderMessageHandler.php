<?php

namespace PrestaShop\PrestaShop\Adapter\OrderMessage\CommandHandler;

/**
 * Handles editing order message using legacy object model
 *
 * @internal
 */
final class EditOrderMessageHandler extends \PrestaShop\PrestaShop\Adapter\OrderMessage\AbstractOrderMessageHandler implements \PrestaShop\PrestaShop\Core\Domain\OrderMessage\CommandHandler\EditOrderMessageHandlerInterface
{
    /**
     * @param EditOrderMessageCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderMessage\Command\EditOrderMessageCommand $command): void
    {
    }
}
