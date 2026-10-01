<?php

namespace PrestaShop\PrestaShop\Core\Domain\ApiClient\CommandHandler;

interface AddApiClientCommandHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ApiClient\Command\AddApiClientCommand $command): \PrestaShop\PrestaShop\Core\Domain\ApiClient\ValueObject\CreatedApiClient;
}
