<?php

namespace PrestaShopBundle\Command;

class ExportThemeCommand extends \Symfony\Component\Console\Command\Command
{
    public function __construct(\PrestaShop\PrestaShop\Core\Addon\Theme\ThemeRepository $themeRepository, \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeExporter $themeExporter, \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    protected function configure()
    {
    }
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
    }
}
