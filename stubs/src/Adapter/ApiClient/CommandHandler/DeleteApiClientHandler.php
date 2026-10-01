<?php

namespace PrestaShop\PrestaShop\Adapter\ApiClient\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class DeleteApiClientHandler implements \PrestaShop\PrestaShop\Core\Domain\ApiClient\CommandHandler\DeleteApiClientHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ApiClientRepository $repository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ApiClient\Command\DeleteApiClientCommand $command): void
    {
    }
}
