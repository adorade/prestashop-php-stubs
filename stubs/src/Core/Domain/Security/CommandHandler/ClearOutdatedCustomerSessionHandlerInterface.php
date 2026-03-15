<?php

namespace PrestaShop\PrestaShop\Core\Domain\Security\CommandHandler;

/**
 * Interface ClearOutdatedCustomerSessionHandlerInterface defines session deletion handler.
 */
interface ClearOutdatedCustomerSessionHandlerInterface
{
    /**
     * Delete session.
     *
     * @param ClearOutdatedCustomerSessionCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Security\Command\ClearOutdatedCustomerSessionCommand $command): void;
}
