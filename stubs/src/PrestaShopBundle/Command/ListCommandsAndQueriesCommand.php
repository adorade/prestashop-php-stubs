<?php

namespace PrestaShopBundle\Command;

/**
 * Lists all commands and queries definitions
 */
class ListCommandsAndQueriesCommand extends \Symfony\Component\Console\Command\Command
{
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\Parser\CommandDefinitionParser $commandDefinitionParser, array $commandAndQueries)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configure()
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
    }
}
