<?php

namespace PrestaShopBundle\Command;

/**
 * Appends sql upgrade file with the sql which can be used to create new hooks.
 */
class AppendHooksListForSqlUpgradeFileCommand extends \Symfony\Component\Console\Command\Command
{
    public function __construct(string $env, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, \PrestaShop\PrestaShop\Core\Hook\Provider\GridDefinitionHookByServiceIdsProvider $gridDefinitionHookByServiceIdsProvider, \PrestaShop\PrestaShop\Core\Hook\Provider\IdentifiableObjectHookByFormTypeProvider $identifiableObjectHookByFormTypeProvider, \PrestaShop\PrestaShop\Adapter\Hook\HookInformationProvider $hookInformationProvider, \PrestaShop\PrestaShop\Core\Hook\Generator\HookDescriptionGenerator $hookDescriptionGenerator, array $serviceIds, array $optionFormHookNames, array $formTypes)
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
