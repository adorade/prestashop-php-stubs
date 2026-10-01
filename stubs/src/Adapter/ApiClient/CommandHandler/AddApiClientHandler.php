<?php

namespace PrestaShop\PrestaShop\Adapter\ApiClient\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class AddApiClientHandler implements \PrestaShop\PrestaShop\Core\Domain\ApiClient\CommandHandler\AddApiClientCommandHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ApiClientRepository $repository, private readonly \Symfony\Component\Validator\Validator\ValidatorInterface $validator, private readonly \Symfony\Component\PasswordHasher\PasswordHasherInterface $passwordHasher)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ApiClient\Command\AddApiClientCommand $command): \PrestaShop\PrestaShop\Core\Domain\ApiClient\ValueObject\CreatedApiClient
    {
    }
}
