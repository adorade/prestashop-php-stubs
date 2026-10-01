<?php

namespace PrestaShop\PrestaShop\Core\Domain\Employee\CommandHandler;

interface ResetEmployeePasswordHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Employee\Command\ResetEmployeePasswordCommand $command): void;
}
