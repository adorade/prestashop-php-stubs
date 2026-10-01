<?php

namespace PrestaShop\PrestaShop\Core\Domain\ApiClient\CommandHandler;

interface DeleteApiClientHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ApiClient\Command\DeleteApiClientCommand $command): void;
}
