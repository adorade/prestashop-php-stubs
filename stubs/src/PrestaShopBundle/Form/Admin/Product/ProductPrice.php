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
     * @var \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider
     */
    public $countryDataprovider;
    /**
     * @var \Currency
     */
    public $currency;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider
     */
    public $currencyDataprovider;
    /**
     * @var float
     */
    public $eco_tax_rate;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Group\GroupDataProvider
     */
    public $groupDataprovider;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\LegacyContext
     */
    public $legacyContext;
    /**
     * @var \Symfony\Component\Routing\Router
     */
    public $router;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Shop\Context
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
     * @var \Symfony\Contracts\Translation\TranslatorInterface
     */
    public $translator;
    /**
     * Constructor.
     *
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \PrestaShop\PrestaShop\Adapter\Tax\TaxRuleDataProvider $taxDataProvider
     * @param \Symfony\Component\Routing\Router $router
     * @param \PrestaShop\PrestaShop\Adapter\Shop\Context $shopContextAdapter
     * @param \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider $countryDataprovider
     * @param \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider $currencyDataprovider
     * @param \PrestaShop\PrestaShop\Adapter\Group\GroupDataProvider $groupDataprovider
     * @param \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext
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
