<?php

namespace PrestaShop\PrestaShop\Core\Domain\Contact\CommandHandler;

/**
 * Interface EditContactHandlerInterface defines contract for EditContactHandler.
 */
interface EditContactHandlerInterface
{
    /**
     * @param EditContactCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Contact\Command\EditContactCommand $command);
}
