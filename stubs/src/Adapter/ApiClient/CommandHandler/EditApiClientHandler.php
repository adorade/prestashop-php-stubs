<?php

namespace PrestaShop\PrestaShop\Adapter\ApiClient\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class EditApiClientHandler implements \PrestaShop\PrestaShop\Core\Domain\ApiClient\CommandHandler\EditApiClientCommandHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ApiClientRepository $repository, private readonly \Symfony\Component\Validator\Validator\ValidatorInterface $validator)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ApiClient\Command\EditApiClientCommand $command): void
    {
    }
}
