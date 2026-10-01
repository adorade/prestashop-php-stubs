<?php

namespace PrestaShopBundle\Command;

class ModuleListCommand extends \Symfony\Component\Console\Command\Command
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $context, protected readonly \PrestaShop\PrestaShop\Core\Context\ContextBuilderPreparer $contextBuilderPreparer, protected readonly \PrestaShop\PrestaShop\Adapter\Configuration $configuration, protected readonly \PrestaShop\PrestaShop\Core\Module\ModuleRepository $moduleRepository)
    {
    }
    protected function configure(): void
    {
    }
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): int
    {
    }
}
