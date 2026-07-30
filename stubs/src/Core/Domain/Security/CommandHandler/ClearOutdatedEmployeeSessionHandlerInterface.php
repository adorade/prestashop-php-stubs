<?php

namespace PrestaShop\PrestaShop\Core\Domain\Security\CommandHandler;

/**
 * Interface ClearOutdatedEmployeeSessionHandlerInterface defines session deletion handler.
 */
interface ClearOutdatedEmployeeSessionHandlerInterface
{
    /**
     * Delete session.
     *
     * @param ClearOutdatedEmployeeSessionCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Security\Command\ClearOutdatedEmployeeSessionCommand $command): void;
}
