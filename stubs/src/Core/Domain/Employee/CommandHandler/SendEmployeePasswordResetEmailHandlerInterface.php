<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler;

interface SendEmployeePasswordResetEmailHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Employee\Command\SendEmployeePasswordResetEmailCommand $command
     *
     * @return string The url to reset the password
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Employee\Command\SendEmployeePasswordResetEmailCommand $command): string;
}
