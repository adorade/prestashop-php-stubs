<?php

namespace PrestaShop\PrestaShop\Core\Domain\Contact\CommandHandler;

/**
 * Interface AddContactHandlerInterface defines contract for AddContactHandler.
 */
interface AddContactHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Contact\Command\AddContactCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Contact\ValueObject\ContactId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Contact\Command\AddContactCommand $command);
}
