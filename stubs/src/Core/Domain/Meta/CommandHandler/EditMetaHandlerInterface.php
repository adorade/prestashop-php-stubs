<?php

namespace PrestaShop\PrestaShop\Core\Domain\Meta\CommandHandler;

/**
 * Interface EditMetaHandlerInterface defines contract for EditMetaHandler.
 */
interface EditMetaHandlerInterface
{
    /**
     * Handles meta entity editing.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Meta\Command\EditMetaCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Meta\Command\EditMetaCommand $command);
}
