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
     * @var CategoryDataProvider
     */
    public $categoryDataProvider;
    /**
     * @var Configuration
     */
    public $configuration;
    /**
     * @var Currency
     */
    public $currency;
    /**
     * @var FeatureDataProvider
     */
    public $featureDataProvider;
    /**
     * @var array
     */
    public $nested_categories;
    /**
     * @var ProductDataProvider
     */
    public $productDataProvider;
    /**
     * @var Router
     */
    public $router;
    /**
     * @var TranslatorInterface
     */
    public $translator;
    /**
     * Constructor.
     *
     * @param TranslatorInterface $translator
     * @param LegacyContext $legacyContext
     * @param Router $router
     * @param CategoryDataProvider $categoryDataProvider
     * @param ProductDataProvider $productDataProvider
     * @param FeatureDataProvider $featureDataProvider
     * @param ManufacturerDataProvider $manufacturerDataProvider
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
