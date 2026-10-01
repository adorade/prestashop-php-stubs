<?php

namespace PrestaShopBundle\Command;

/**
 * CLI command to index search.
 */
class SearchIndexationCommand extends \Symfony\Component\Console\Command\Command
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus)
    {
    }
    protected function configure(): void
    {
    }
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): int
    {
    }
}
