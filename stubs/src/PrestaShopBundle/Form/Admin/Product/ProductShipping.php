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
     * @var \Currency
     */
    public $currency;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\LegacyContext
     */
    public $legacyContext;
    /**
     * @var array<int|array>
     */
    public $locales;
    /**
     * @var \Symfony\Contracts\Translation\TranslatorInterface
     */
    public $translator;
    /**
     * Constructor.
     *
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext
     * @param \PrestaShop\PrestaShop\Adapter\Warehouse\WarehouseDataProvider $warehouseDataProvider
     * @param \PrestaShop\PrestaShop\Adapter\Carrier\CarrierDataProvider $carrierDataProvider
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
