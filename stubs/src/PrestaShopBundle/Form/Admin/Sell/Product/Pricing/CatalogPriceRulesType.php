<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Pricing;

/**
 * This form type is needed to display custom list of Catalog Price Rules.
 * Check src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/FormTheme/catalog_price_rules.html.twig
 * for implementation.
 */
class CatalogPriceRulesType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * PricingType constructor.
     *
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param array $locales
     * @param \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, private readonly \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagStateCheckerInterface $featureFlagStateChecker, private readonly \Symfony\Component\Routing\Generator\UrlGeneratorInterface $urlGenerator)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
