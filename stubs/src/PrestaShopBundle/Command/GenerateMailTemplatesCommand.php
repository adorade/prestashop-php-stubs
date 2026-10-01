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
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return int
     */
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): int
    {
    }
}
