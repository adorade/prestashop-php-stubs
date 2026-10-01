<?php

namespace PrestaShopBundle\Command;

/**
 * This CLI command allows to enable/disable a feature flag or to list all of them.
 */
class FeatureFlagCommand extends \Symfony\Component\Console\Command\Command
{
    protected static $defaultName = 'prestashop:feature-flag';
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\FeatureFlagRepository $featureFlagRepository, private readonly \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagManager $featureFlagManager)
    {
    }
    protected function configure()
    {
    }
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): int
    {
    }
}
