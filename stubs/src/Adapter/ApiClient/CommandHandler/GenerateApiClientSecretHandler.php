<?php

namespace PrestaShop\PrestaShop\Adapter\ApiClient\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class GenerateApiClientSecretHandler implements \PrestaShop\PrestaShop\Core\Domain\ApiClient\CommandHandler\GenerateApiClientSecretHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ApiClientRepository $repository, private readonly \Symfony\Component\PasswordHasher\PasswordHasherInterface $passwordHasher)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ApiClient\Command\GenerateApiClientSecretCommand $command): string
    {
    }
}
