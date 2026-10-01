<?php

namespace PrestaShop\PrestaShop\Core\Domain\ApiClient\CommandHandler;

interface EditApiClientCommandHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ApiClient\Command\EditApiClientCommand $command): void;
}
