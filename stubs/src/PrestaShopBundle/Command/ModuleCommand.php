<?php

namespace PrestaShopBundle\Command;

class ModuleCommand extends \Symfony\Component\Console\Command\Command
{
    /**
     * @var \Symfony\Component\Console\Helper\FormatterHelper
     */
    protected $formatter;
    /**
     * @var \Symfony\Contracts\Translation\TranslatorInterface
     */
    protected $translator;
    /**
     * @var \Symfony\Component\Console\Input\InputInterface
     */
    protected $input;
    /**
     * @var \Symfony\Component\Console\Output\OutputInterface
     */
    protected $output;
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Adapter\LegacyContext $context, \PrestaShop\PrestaShop\Adapter\Module\Configuration\ModuleSelfConfigurator $moduleSelfConfigurator, \PrestaShop\PrestaShop\Core\Module\ModuleManager $moduleManager)
    {
    }
    protected function configure()
    {
    }
    protected function init(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
    }
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
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
