<?php

namespace PrestaShopBundle\Command;

/**
 * This command is used for appending the hook names in the configuration file.
 */
class AppendConfigurationFileHooksListCommand extends \Symfony\Component\Console\Command\Command
{
    public function __construct(private string $env, private readonly \PrestaShop\PrestaShop\Core\Hook\Extractor\HookExtractor $hookExtractor, private \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, private \PrestaShop\PrestaShop\Core\Hook\Provider\GridDefinitionHookByServiceIdsProvider $gridDefinitionHookByServiceIdsProvider, private \PrestaShop\PrestaShop\Core\Hook\Provider\IdentifiableObjectHookByFormTypeProvider $identifiableObjectHookByFormTypeProvider, private \PrestaShop\PrestaShop\Core\Hook\Generator\HookDescriptionGenerator $hookDescriptionGenerator, private array $serviceIds, private array $optionFormHookNames, private array $formTypes, private string $hookFile)
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
    }
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): int
    {
    }
}
