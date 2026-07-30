<?php

namespace PrestaShop\PrestaShop\Core\Domain\Security\CommandHandler;

/**
 * Interface DeleteEmployeeSessionHandlerInterface defines session deletion handler.
 */
interface DeleteEmployeeSessionHandlerInterface
{
    /**
     * Delete session.
     *
     * @param DeleteEmployeeSessionCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Security\Command\DeleteEmployeeSessionCommand $command): void;
}
