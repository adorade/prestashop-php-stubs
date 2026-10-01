<?php

namespace PrestaShopBundle\Form\Admin\Product;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * This form class is responsible to generate the basic product information form.
 */
class ProductInformation extends \PrestaShopBundle\Form\Admin\Type\CommonAbstractType
{
    /**
     * @var array
     */
    public $categories;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Category\CategoryDataProvider
     */
    public $categoryDataProvider;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Configuration
     */
    public $configuration;
    /**
     * @var \Currency
     */
    public $currency;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Feature\FeatureDataProvider
     */
    public $featureDataProvider;
    /**
     * @var array
     */
    public $nested_categories;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Product\ProductDataProvider
     */
    public $productDataProvider;
    /**
     * @var \PrestaShopBundle\Service\Routing\Router
     */
    public $router;
    /**
     * @var \Symfony\Contracts\Translation\TranslatorInterface
     */
    public $translator;
    /**
     * Constructor.
     *
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext
     * @param \PrestaShopBundle\Service\Routing\Router $router
     * @param \PrestaShop\PrestaShop\Adapter\Category\CategoryDataProvider $categoryDataProvider
     * @param \PrestaShop\PrestaShop\Adapter\Product\ProductDataProvider $productDataProvider
     * @param \PrestaShop\PrestaShop\Adapter\Feature\FeatureDataProvider $featureDataProvider
     * @param \PrestaShop\PrestaShop\Adapter\Manufacturer\ManufacturerDataProvider $manufacturerDataProvider
     */
    public function __construct($translator, $legacyContext, $router, $categoryDataProvider, $productDataProvider, $featureDataProvider, $manufacturerDataProvider)
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
     * Returns the block prefix of this type.
     *
     * @return string The prefix name
     */
    public function getBlockPrefix()
    {
    }
}
