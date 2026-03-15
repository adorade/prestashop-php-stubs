<?php

namespace PrestaShopBundle\Form\Admin\Product;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * This form class is responsible to generate the product shipping form.
 */
class ProductShipping extends \PrestaShopBundle\Form\Admin\Type\CommonAbstractType
{
    /**
     * @var Currency
     */
    public $currency;
    /**
     * @var LegacyContext
     */
    public $legacyContext;
    /**
     * @var array<int|array>
     */
    public $locales;
    /**
     * @var TranslatorInterface
     */
    public $translator;
    /**
     * Constructor.
     *
     * @param TranslatorInterface $translator
     * @param LegacyContext $legacyContext
     * @param WarehouseDataProvider $warehouseDataProvider
     * @param CarrierDataProvider $carrierDataProvider
     * @param string $dimensionUnit
     * @param string $weightUnit
     */
    public function __construct($translator, $legacyContext, $warehouseDataProvider, $carrierDataProvider, string $dimensionUnit, string $weightUnit)
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
