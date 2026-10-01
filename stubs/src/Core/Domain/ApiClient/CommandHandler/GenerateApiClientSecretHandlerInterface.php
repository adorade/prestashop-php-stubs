<?php

namespace PrestaShop\PrestaShop\Core\Domain\ApiClient\CommandHandler;

interface GenerateApiClientSecretHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ApiClient\Command\GenerateApiClientSecretCommand $command): string;
}
