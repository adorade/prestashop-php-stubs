<?php

namespace PrestaShopBundle\Command;

#[\Symfony\Component\Console\Attribute\AsCommand(name: 'prestashop:generate:apidoc', description: 'Generate APIDoc')]
class GenerateAPIDocCommand extends \Symfony\Component\Console\Command\Command
{
    public function __construct(
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'api_platform.action.documentation')]
        protected readonly \ApiPlatform\Symfony\Action\DocumentationAction $documentationAction
    )
    {
    }
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): int
    {
    }
}
