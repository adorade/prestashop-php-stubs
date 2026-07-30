<?php

namespace PrestaShopBundle\Command;

/**
 * Runs naming conventions linter in the CLI
 */
final class NamingConventionLinterCommand extends \Symfony\Component\Console\Command\Command
{
    public function __construct(\PrestaShopBundle\Routing\Linter\AdminRouteProvider $adminRouteProvider, \PrestaShopBundle\Routing\Linter\NamingConventionLinter $namingConventionLinter)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configure()
    {
    }
}
