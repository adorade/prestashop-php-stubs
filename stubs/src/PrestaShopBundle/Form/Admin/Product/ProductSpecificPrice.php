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
     * @var \PrestaShop\PrestaShop\Adapter\LegacyContext
     */
    public $context;
    /**
     * @var \Currency
     */
    public $currency;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Customer\CustomerDataProvider
     */
    public $customerDataProvider;
    /**
     * @var array<int|array>
     */
    public $locales;
    /**
     * @var \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    public $router;
    /**
     * @var array
     */
    public $shops;
    /**
     * @var \Symfony\Contracts\Translation\TranslatorInterface
     */
    public $translator;
    /**
     * Constructor.
     *
     * @param \Symfony\Bundle\FrameworkBundle\Routing\Router $router
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \PrestaShop\PrestaShop\Adapter\Shop\Context $shopContextAdapter
     * @param \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider $countryDataprovider
     * @param \PrestaShop\PrestaShop\Core\Currency\CurrencyDataProviderInterface $currencyDataprovider
     * @param \PrestaShop\PrestaShop\Adapter\Group\GroupDataProvider $groupDataprovider
     * @param \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext
     * @param \PrestaShop\PrestaShop\Adapter\Customer\CustomerDataProvider $customerDataProvider
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
