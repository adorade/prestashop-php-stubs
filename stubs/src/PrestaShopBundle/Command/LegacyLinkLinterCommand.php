<?php

namespace PrestaShopBundle\Command;

/**
 * Checks if all admin routes are configured with _legacy_link
 */
class LegacyLinkLinterCommand extends \Symfony\Component\Console\Command\Command
{
    public function __construct(\PrestaShopBundle\Routing\Linter\LegacyLinkLinter $legacyLinkLinter, \PrestaShopBundle\Routing\Linter\AdminRouteProvider $adminRouteProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
    }
}
