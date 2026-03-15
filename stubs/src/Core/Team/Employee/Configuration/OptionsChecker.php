<?php

namespace PrestaShop\PrestaShop\Core\Team\Employee\Configuration;

/**
 * Class OptionsChecker checks if employee options can be changed depending on current shop context.
 */
final class OptionsChecker implements \PrestaShop\PrestaShop\Core\Team\Employee\Configuration\OptionsCheckerInterface
{
    /**
     * @param FeatureInterface $multistoreFeature
     * @param MultistoreContextCheckerInterface $multistoreContextChecker
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature, \PrestaShop\PrestaShop\Core\Multistore\MultistoreContextCheckerInterface $multistoreContextChecker)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function canBeChanged()
    {
    }
}
