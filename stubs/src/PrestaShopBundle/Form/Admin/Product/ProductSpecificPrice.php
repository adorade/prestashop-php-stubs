<?php

namespace PrestaShopBundle\Form\Admin\Product;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * This form class is responsible to generate the basic product specific prices form.
 */
class ProductSpecificPrice extends \PrestaShopBundle\Form\Admin\Type\CommonAbstractType
{
    /**
     * @var LegacyContext
     */
    public $context;
    /**
     * @var Currency
     */
    public $currency;
    /**
     * @var CustomerDataProvider
     */
    public $customerDataProvider;
    /**
     * @var array<int|array>
     */
    public $locales;
    /**
     * @var Router
     */
    public $router;
    /**
     * @var array
     */
    public $shops;
    /**
     * @var TranslatorInterface
     */
    public $translator;
    /**
     * Constructor.
     *
     * @param Router $router
     * @param TranslatorInterface $translator
     * @param Context $shopContextAdapter
     * @param CountryDataProvider $countryDataprovider
     * @param CurrencyDataProviderInterface $currencyDataprovider
     * @param GroupDataProvider $groupDataprovider
     * @param LegacyContext $legacyContext
     * @param CustomerDataProvider $customerDataProvider
     */
    public function __construct($router, $translator, $shopContextAdapter, $countryDataprovider, $currencyDataprovider, $groupDataprovider, $legacyContext, $customerDataProvider)
    {
    }
    /**
     * {@inheritdoc}
     *
     * Builds form
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
