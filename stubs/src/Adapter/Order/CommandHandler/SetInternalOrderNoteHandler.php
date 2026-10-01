<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * Handles command that saves internal order note.
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class SetInternalOrderNoteHandler extends \PrestaShop\PrestaShop\Adapter\Order\AbstractOrderHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler\SetInternalOrderNoteHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Order\Command\SetInternalOrderNoteCommand $command
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Order\Exception\OrderNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\SetInternalOrderNoteCommand $command)
    {
    }
}
