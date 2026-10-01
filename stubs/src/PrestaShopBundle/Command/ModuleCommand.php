<?php

namespace PrestaShopBundle\Command;

class ModuleCommand extends \Symfony\Component\Console\Command\Command
{
    /**
     * @var \Symfony\Component\Console\Input\InputInterface
     */
    protected $input;
    /**
     * @var \Symfony\Component\Console\Output\OutputInterface
     */
    protected $output;
    public function __construct(protected readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, protected readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $context, protected readonly \PrestaShop\PrestaShop\Adapter\Module\Configuration\ModuleSelfConfigurator $moduleSelfConfigurator, protected readonly \PrestaShop\PrestaShop\Core\Module\ModuleManager $moduleManager, protected readonly \PrestaShop\PrestaShop\Core\Context\ContextBuilderPreparer $contextBuilderPreparer, protected readonly \PrestaShop\PrestaShop\Adapter\Configuration $configuration)
    {
    }
    protected function configure()
    {
    }
    protected function init(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
    }
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): int
    {
    }
    protected function executeConfigureModuleAction($moduleName, $file = null)
    {
    }
    protected function executeGenericModuleAction($action, $moduleName)
    {
    }
    protected function displayMessage($message, $type = 'info')
    {
    }
}
