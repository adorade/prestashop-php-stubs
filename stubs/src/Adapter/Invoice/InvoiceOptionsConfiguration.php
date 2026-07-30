<?php

namespace PrestaShop\PrestaShop\Adapter\Invoice;

/**
 * Class InvoiceOptionsConfiguration is responsible for saving & loading invoice configuration.
 */
final class InvoiceOptionsConfiguration extends \PrestaShop\PrestaShop\Core\Configuration\AbstractMultistoreConfiguration
{
    /**
     * AbstractMultistoreConfiguration constructor.
     *
     * @param Configuration $configuration
     * @param Context $shopContext
     * @param FeatureInterface $multistoreFeature
     * @param FormChoiceProviderInterface $invoiceModelByNameChoiceProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Configuration $configuration, \PrestaShop\PrestaShop\Adapter\Shop\Context $shopContext, \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $invoiceModelByNameChoiceProvider)
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
