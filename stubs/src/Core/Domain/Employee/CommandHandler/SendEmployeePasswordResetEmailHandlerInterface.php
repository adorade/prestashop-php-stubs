<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler;

interface SendEmployeePasswordResetEmailHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Employee\Command\SendEmployeePasswordResetEmailCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Employee\Command\SendEmployeePasswordResetEmailCommand $command): void;
}
