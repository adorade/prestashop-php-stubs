<?php

namespace PrestaShop\PrestaShop\Adapter\Alias\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class AddSearchTermAliasesHandler implements \PrestaShop\PrestaShop\Core\Domain\Alias\CommandHandler\AddSearchTermAliasesHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Alias\Repository\AliasRepository $aliasRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Alias\Repository\AliasRepository $aliasRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Alias\Command\AddSearchTermAliasesCommand $command): array
    {
    }
}
