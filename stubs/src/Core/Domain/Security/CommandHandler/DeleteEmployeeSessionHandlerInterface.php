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
     * @param \PrestaShop\PrestaShop\Core\Domain\Security\Command\DeleteEmployeeSessionCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Security\Command\DeleteEmployeeSessionCommand $command): void;
}
