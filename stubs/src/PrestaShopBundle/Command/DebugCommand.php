<?php

namespace PrestaShopBundle\Command;

/**
 * CLI command for getting and setting debug mode setting
 */
class DebugCommand extends \Symfony\Component\Console\Command\Command
{
    public const STATUS_OK = 0;
    public const STATUS_ERROR = 1;
    /**
     * @var \Symfony\Component\Console\Style\SymfonyStyle
     */
    protected $io;
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus, \PrestaShop\PrestaShop\Adapter\Debug\DebugMode $debugConfiguration)
    {
    }
    protected function configure()
    {
    }
    protected function printDebugState()
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
