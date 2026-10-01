<?php

namespace PrestaShopBundle\Command;

/**
 * Command to generate the .htaccess file
 *
 * Usage:
 *   bin/console prestashop:htaccess:generate [--force]
 *
 * Options:
 *   --force (-f): Force overwrite even if file exists
 *
 * Examples:
 *   bin/console prestashop:htaccess:generate
 *   bin/console prestashop:htaccess:generate --force
 */
#[\Symfony\Component\Console\Attribute\AsCommand(name: 'prestashop:htaccess:generate', description: 'Generate the .htaccess file')]
class GenerateHtaccessCommand extends \Symfony\Component\Console\Command\Command
{
    public function __construct(private \PrestaShop\PrestaShop\Adapter\File\HtaccessFileGenerator $htaccessFileGenerator)
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
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
    }
}
