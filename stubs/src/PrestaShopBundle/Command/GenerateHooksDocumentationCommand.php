<?php

namespace PrestaShopBundle\Command;

#[\Symfony\Component\Console\Attribute\AsCommand(name: 'prestashop:update:hooks-documentation', description: 'Extract Hooks Documentation files')]
final class GenerateHooksDocumentationCommand extends \Symfony\Component\Console\Command\Command
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Hook\Extractor\HookExtractor $hookExtractor, private string $hookFile)
    {
    }
    public function generateMarkdownFiles(array $hooks, string $mdDir, \Symfony\Component\Console\Output\OutputInterface $output): void
    {
    }
}
