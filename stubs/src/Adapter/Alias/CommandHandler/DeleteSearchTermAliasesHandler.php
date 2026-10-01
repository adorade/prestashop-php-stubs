<?php

namespace PrestaShop\PrestaShop\Adapter\Alias\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class DeleteSearchTermAliasesHandler implements \PrestaShop\PrestaShop\Core\Domain\Alias\CommandHandler\DeleteSearchTermAliasesHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Alias\Repository\AliasRepository $aliasRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Alias\Command\DeleteSearchTermAliasesCommand $command): void
    {
    }
}
