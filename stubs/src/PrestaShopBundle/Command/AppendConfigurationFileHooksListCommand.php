<?php

namespace PrestaShopBundle\Command;

/**
 * This command is used for appending the hook names in the configuration file.
 */
class AppendConfigurationFileHooksListCommand extends \Symfony\Component\Console\Command\Command
{
    public function __construct(string $env, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, \PrestaShop\PrestaShop\Core\Hook\Provider\GridDefinitionHookByServiceIdsProvider $gridDefinitionHookByServiceIdsProvider, \PrestaShop\PrestaShop\Core\Hook\Provider\IdentifiableObjectHookByFormTypeProvider $identifiableObjectHookByFormTypeProvider, \PrestaShop\PrestaShop\Core\Hook\Generator\HookDescriptionGenerator $hookDescriptionGenerator, array $serviceIds, array $optionFormHookNames, array $formTypes, string $hookFile)
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
    }
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
    }
}
