<?php

namespace PrestaShopBundle\Command;

/**
 * This command displays information about the current PrestaShop installation.
 * It extends the default Symfony about command to include project-specific details.
 */
#[\Symfony\Component\Console\Attribute\AsCommand(name: 'about', description: 'Display information about the current project')]
class AboutCommand extends \Symfony\Bundle\FrameworkBundle\Command\AboutCommand
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Configuration $configuration)
    {
    }
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): int
    {
    }
}
