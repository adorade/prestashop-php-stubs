<?php

namespace PrestaShopBundle\Command;

class GenerateMailTemplatesCommand extends \Symfony\Component\Console\Command\Command
{
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext)
    {
    }
    protected function configure()
    {
    }
    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return int|void|null
     */
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
    }
}
