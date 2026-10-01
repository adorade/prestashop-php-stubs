<?php

namespace PrestaShop\PrestaShop\Core\Tax;

/**
 * Handles configuration data for tax options.
 */
final class TaxOptionsConfiguration extends \PrestaShop\PrestaShop\Core\Configuration\AbstractMultistoreConfiguration
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Configuration $configuration
     * @param \PrestaShop\PrestaShop\Adapter\Shop\Context $shopContext
     * @param \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature
     * @param \PrestaShop\PrestaShop\Core\Tax\Ecotax\ProductEcotaxResetterInterface $productEcotaxResetter
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Configuration $configuration, \PrestaShop\PrestaShop\Adapter\Shop\Context $shopContext, \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature, \PrestaShop\PrestaShop\Core\Tax\Ecotax\ProductEcotaxResetterInterface $productEcotaxResetter)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getConfiguration()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function updateConfiguration(array $configuration)
    {
    }
}
