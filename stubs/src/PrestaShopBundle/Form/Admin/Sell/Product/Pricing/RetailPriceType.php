<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Pricing;

class RetailPriceType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @var Locale
     */
    protected $contextLocale;
    /**
     * @var Currency
     */
    protected $defaultCurrency;
    /**
     * @var FormChoiceProviderInterface|FormChoiceAttributeProviderInterface
     */
    protected $taxRuleGroupChoicesProvider;
    /**
     * @var RouterInterface
     */
    protected $router;
    /**
     * @var bool
     */
    protected $isTaxEnabled;
    /**
     * @var bool
     */
    protected $isEcotaxEnabled;
    /**
     * @var int
     */
    protected $ecoTaxGroupId;
    /**
     * @var TaxComputer
     */
    protected $taxComputer;
    /**
     * @var int
     */
    protected $contextCountryId;
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\Localization\Locale $contextLocale, \Currency $defaultCurrency, $taxRuleGroupChoicesProvider, \Symfony\Component\Routing\RouterInterface $router, bool $isTaxEnabled, bool $isEcotaxEnabled, int $ecoTaxGroupId, \PrestaShop\PrestaShop\Adapter\Tax\TaxComputer $taxComputer, int $contextCountryId)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
