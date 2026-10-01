<?php

namespace PrestaShop\PrestaShop\Adapter\Alias\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class UpdateSearchTermAliasesHandler implements \PrestaShop\PrestaShop\Core\Domain\Alias\CommandHandler\UpdateSearchTermAliasesHandlerInterface
{
    public function __construct(protected \PrestaShop\PrestaShop\Adapter\Alias\Repository\AliasRepository $aliasRepository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Alias\Command\UpdateSearchTermAliasesCommand $command): void
    {
    }
}
