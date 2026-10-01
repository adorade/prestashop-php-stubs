<?php

namespace PrestaShopBundle\Command;

/**
 * Lists all commands and queries definitions
 */
class ListCommandsAndQueriesCommand extends \Symfony\Component\Console\Command\Command
{
    public function __construct(private \PrestaShop\PrestaShop\Core\CommandBus\Parser\CommandDefinitionParser $commandDefinitionParser, private array $commandAndQueries, private \ApiPlatform\Metadata\Resource\Factory\ResourceNameCollectionFactoryInterface $resourceNameCollectionFactory, private \ApiPlatform\Metadata\Resource\Factory\ResourceMetadataCollectionFactoryInterface $resourceMetadataFactory, private \PrestaShopBundle\ApiPlatform\Scopes\ApiResourceScopesExtractorInterface $apiResourceScopesExtractor, private string $moduleDir)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configure()
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): int
    {
    }
}
