<?php

namespace PrestaShopBundle\Command;

/**
 * Appends sql upgrade file with the sql which can be used to create new hooks.
 *
 * The command compares the current hook.xml fixture file with the previous one (you need to specify
 * the previous version to define the base to compare to).
 *
 * Thanks to the comparison we get new and obsolete hooks, then two SQL queries are generated and
 * appended in the autoupgrade file (you must specify its local path), the upgrade file matching the
 * current version will be appended with these two SQL queries.
 *
 * No check of previous request in the file is done you must check manually that there are no duplicates.
 */
class AppendHooksListForSqlUpgradeFileCommand extends \Symfony\Component\Console\Command\Command
{
    public function __construct(private string $env, private \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, private \Symfony\Contracts\HttpClient\HttpClientInterface $httpClient, private string $projectDir)
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
