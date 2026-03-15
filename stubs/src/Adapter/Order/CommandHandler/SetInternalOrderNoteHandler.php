<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * Handles command that saves internal order note.
 *
 * @internal
 */
final class SetInternalOrderNoteHandler extends \PrestaShop\PrestaShop\Adapter\Order\AbstractOrderHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler\SetInternalOrderNoteHandlerInterface
{
    /**
     * @param SetInternalOrderNoteCommand $command
     *
     * @throws OrderNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\SetInternalOrderNoteCommand $command)
    {
    }
}
