<?php

namespace PrestaShop\PrestaShop\Core\Domain\Security\CommandHandler;

/**
 * Interface DeleteCustomerSessionHandlerInterface defines session deletion handler.
 */
interface DeleteCustomerSessionHandlerInterface
{
    /**
     * Delete session.
     *
     * @param DeleteCustomerSessionCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Security\Command\DeleteCustomerSessionCommand $command): void;
}
