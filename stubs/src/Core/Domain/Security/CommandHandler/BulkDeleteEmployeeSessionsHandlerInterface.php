<?php

namespace PrestaShop\PrestaShop\Core\Domain\Security\CommandHandler;

/**
 * Defines interface for employee bulk delete command handler.
 */
interface BulkDeleteEmployeeSessionsHandlerInterface
{
    /**
     * @param BulkDeleteEmployeeSessionsCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Security\Command\BulkDeleteEmployeeSessionsCommand $command): void;
}
