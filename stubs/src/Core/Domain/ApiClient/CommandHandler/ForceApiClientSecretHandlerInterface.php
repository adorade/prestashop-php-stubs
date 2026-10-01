<?php

namespace PrestaShop\PrestaShop\Core\Domain\ApiClient\CommandHandler;

interface ForceApiClientSecretHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ApiClient\Command\ForceApiClientSecretCommand $command): void;
}
