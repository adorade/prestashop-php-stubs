<?php

namespace PrestaShopBundle\Command;

/**
 * Command to export module translations from command line
 */
#[\Symfony\Component\Console\Attribute\AsCommand(name: 'prestashop:translation:export-module', description: 'Export module translations to XLF files')]
class ExportModuleTranslationsCommand extends \Symfony\Component\Console\Command\Command
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Translation\Export\TranslationCatalogueExporter $translationCatalogueExporter, private readonly \Symfony\Component\Filesystem\Filesystem $filesystem, private readonly string $moduleDir)
    {
    }
    protected function configure(): void
    {
    }
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): int
    {
    }
}
