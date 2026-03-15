<?php

namespace PrestaShopBundle\Form\Admin\Product;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * This form class is responsible to generate the product price form.
 */
class ProductPrice extends \PrestaShopBundle\Form\Admin\Type\CommonAbstractType
{
    // When the form is used to create, the product does not yet exists
    // however the ID is required for some fields so we use a default one:
    public const DEFAULT_PRODUCT_ID_FOR_FORM_CREATION = 1;
    /**
     * @var CountryDataProvider
     */
    public $countryDataprovider;
    /**
     * @var Currency
     */
    public $currency;
    /**
     * @var CurrencyDataProvider
     */
    public $currencyDataprovider;
    /**
     * @var float
     */
    public $eco_tax_rate;
    /**
     * @var GroupDataProvider
     */
    public $groupDataprovider;
    /**
     * @var LegacyContext
     */
    public $legacyContext;
    /**
     * @var Router
     */
    public $router;
    /**
     * @var Context
     */
    public $shopContextAdapter;
    /**
     * @var array
     */
    public $tax_rules;
    /**
     * @var array[]
     */
    public $tax_rules_rates;
    /**
     * @var TranslatorInterface
     */
    public $translator;
    /**
     * Constructor.
     *
     * @param TranslatorInterface $translator
     * @param TaxRuleDataProvider $taxDataProvider
     * @param Router $router
     * @param Context $shopContextAdapter
     * @param CountryDataProvider $countryDataprovider
     * @param CurrencyDataProvider $currencyDataprovider
     * @param GroupDataProvider $groupDataprovider
     * @param LegacyContext $legacyContext
     */
    public function __construct($translator, $taxDataProvider, $router, $shopContextAdapter, $countryDataprovider, $currencyDataprovider, $groupDataprovider, $legacyContext)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * Returns the block prefix of this type.
     *
     * @return string The prefix name
     */
    public function getBlockPrefix()
    {
    }
}
