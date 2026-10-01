<?php

namespace PrestaShopBundle\Command;

/**
 * This command is used to manage API Clients, for starter it will only handle creating and deleting an
 * API Client but some additional actions can be added in the future (regenerate secret, toggle status,
 * listing, ...)
 */
#[\Symfony\Component\Console\Attribute\AsCommand(name: 'prestashop:api-client', description: 'Manage API Client.')]
class APIClientCommand extends \Symfony\Component\Console\Command\Command
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus, private readonly \PrestaShopBundle\ApiPlatform\Scopes\ApiResourceScopesExtractorInterface $apiResourceScopesExtractor, private readonly \PrestaShopBundle\Entity\Repository\ApiClientRepository $apiClientRepository)
    {
    }
    protected function configure(): void
    {
    }
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): int
    {
    }
}
