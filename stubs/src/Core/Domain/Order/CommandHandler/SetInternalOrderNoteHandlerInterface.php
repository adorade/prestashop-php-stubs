<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler;

/**
 * Defines interface for service that handles command which sets internal order note
 */
interface SetInternalOrderNoteHandlerInterface
{
    /**
     * @param SetInternalOrderNoteCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\SetInternalOrderNoteCommand $command);
}
