<?php

namespace PrestaShopBundle\Model\Product;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * This form class is responsible to map the form data to the product object.
 */
class AdminModelAdapter extends \PrestaShopBundle\Model\AdminModelAdapter
{
    /**
     * Constructor
     * Set all adapters needed and get product.
     *
     * @param LegacyContext $legacyContext
     * @param AdminProductWrapper $adminProductWrapper
     * @param Tools $toolsAdapter
     * @param ProductDataProvider $productDataProvider
     * @param SupplierDataProvider $supplierDataProvider
     * @param WarehouseDataProvider $warehouseDataProvider
     * @param FeatureDataProvider $featureDataProvider
     * @param PackDataProvider $packDataProvider
     * @param ShopContext $shopContext
     * @param TaxRuleDataProvider $taxRuleDataProvider
     * @param Configuration $configuration
     * @param Router $router
     * @param FloatParser|null $floatParser
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, \PrestaShop\PrestaShop\Adapter\Product\AdminProductWrapper $adminProductWrapper, \PrestaShop\PrestaShop\Adapter\Tools $toolsAdapter, \PrestaShop\PrestaShop\Adapter\Product\ProductDataProvider $productDataProvider, \PrestaShop\PrestaShop\Adapter\Supplier\SupplierDataProvider $supplierDataProvider, \PrestaShop\PrestaShop\Adapter\Warehouse\WarehouseDataProvider $warehouseDataProvider, \PrestaShop\PrestaShop\Adapter\Feature\FeatureDataProvider $featureDataProvider, \PrestaShop\PrestaShop\Adapter\Pack\PackDataProvider $packDataProvider, \PrestaShop\PrestaShop\Adapter\Shop\Context $shopContext, \PrestaShop\PrestaShop\Adapter\Tax\TaxRuleDataProvider $taxRuleDataProvider, \PrestaShop\PrestaShop\Adapter\Configuration $configuration, \Symfony\Component\Routing\Router $router, \PrestaShopBundle\Utils\FloatParser $floatParser = null)
    {
    }
    /**
     * modelMapper
     * Map form data to object model.
     *
     * @param array $form_data
     * @param bool $isMultiShopContext If the context is define to multishop, force data to be apply on all shops
     *
     * @return array Transformed form data to model attempt
     */
    public function getModelData($form_data, $isMultiShopContext = false)
    {
    }
    /**
     * formMapper
     * Map object model to form data.
     *
     * @param Product $product
     *
     * @return array Transformed model data to form attempt
     */
    public function getFormData(\Product $product)
    {
    }
    /**
     * Get all available product attributes resume.
     *
     * @param Product $product
     *
     * @return array Product attributes combinations
     */
    public function getAttributesResume(\Product $product)
    {
    }
}
