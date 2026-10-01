<?php

namespace PrestaShopBundle\Form\Admin\Improve\Shipping\Carrier;

class ShippingLocationsAndCostsType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function __construct(\PrestaShopBundle\Translation\TranslatorInterface $translator, array $locales, private readonly \Symfony\Component\Routing\RouterInterface $router, private readonly \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, private readonly \PrestaShop\PrestaShop\Core\Currency\CurrencyDataProviderInterface $currencyDataProvider, private readonly \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagStateCheckerInterface $featureFlagChecker)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
