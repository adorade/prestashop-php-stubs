<?php

namespace PrestaShop\PrestaShop\Core\Domain\Contact\CommandHandler;

/**
 * Interface AddContactHandlerInterface defines contract for AddContactHandler.
 */
interface AddContactHandlerInterface
{
    /**
     * @param AddContactCommand $command
     *
     * @return ContactId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Contact\Command\AddContactCommand $command);
}
