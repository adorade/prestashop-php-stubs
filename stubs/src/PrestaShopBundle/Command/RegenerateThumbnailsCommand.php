<?php

namespace PrestaShopBundle\Command;

/**
 * Console command to regenerate thumbnails
 */
#[\Symfony\Component\Console\Attribute\AsCommand(name: 'prestashop:thumbnails:regenerate', description: 'Regenerate thumbnails')]
class RegenerateThumbnailsCommand extends \Symfony\Component\Console\Command\Command
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus)
    {
    }
    protected function configure()
    {
    }
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): int
    {
    }
}
