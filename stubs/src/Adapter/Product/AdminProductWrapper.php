<?php

namespace PrestaShop\PrestaShop\Adapter\Product;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * Admin controller wrapper for new Architecture, about Product admin controller.
 */
class AdminProductWrapper
{
    /**
     * Constructor : Inject Symfony\Component\Translation Translator.
     *
     * @param object $translator
     * @param array $employeeAssociatedShops
     * @param Locale $locale
     * @param FloatParser|null $floatParser
     */
    public function __construct($translator, array $employeeAssociatedShops, \PrestaShop\PrestaShop\Core\Localization\Locale $locale, \PrestaShopBundle\Utils\FloatParser $floatParser = null)
    {
    }
    /**
     * getInstance
     * Get the legacy AdminProductsControllerCore instance.
     *
     * @return AdminProductsController instance
     */
    public function getInstance()
    {
    }
    /**
     * processProductAttribute
     * Update a combination.
     *
     * @param object $product
     * @param array $combinationValues the posted values
     *
     * @return void
     */
    public function processProductAttribute($product, $combinationValues)
    {
    }
    /**
     * Update a quantity for a product or a combination.
     *
     * Does not work in Advanced stock management.
     *
     * @param Product $product
     * @param int $quantity
     * @param int $forAttributeId
     */
    public function processQuantityUpdate(\Product $product, $quantity, $forAttributeId = 0)
    {
    }
    /**
     * Update the out of stock strategy.
     *
     * @param Product $product
     * @param int $out_of_stock
     */
    public function processProductOutOfStock(\Product $product, $out_of_stock)
    {
    }
    /**
     * @param Product $product
     * @param string $location
     */
    public function processLocation(\Product $product, $location)
    {
    }
    /**
     * Set if a product depends on stock (ASM). For a product or a combination.
     *
     * Does work only in Advanced stock management.
     *
     * @param Product $product
     * @param bool $dependsOnStock
     * @param int $forAttributeId
     */
    public function processDependsOnStock(\Product $product, $dependsOnStock, $forAttributeId = 0)
    {
    }
    /**
     * Add/Update a SpecificPrice object.
     *
     * @param int $id_product
     * @param array $specificPriceValues the posted values
     * @param int|null $idSpecificPrice if this is an update of an existing specific price, null else
     *
     * @return AdminProductsController|array
     */
    public function processProductSpecificPrice($id_product, $specificPriceValues, $idSpecificPrice = null)
    {
    }
    /**
     * Get specific prices list for a product.
     *
     * @param object $product
     * @param object $defaultCurrency
     * @param array $shops Available shops
     * @param array $currencies Available currencies
     * @param array $countries Available countries
     * @param array $groups Available users groups
     *
     * @return array
     */
    public function getSpecificPricesList($product, $defaultCurrency, $shops, $currencies, $countries, $groups)
    {
    }
    /**
     * @param int $id
     *
     * @return SpecificPrice
     *
     * @throws EntityNotFoundException
     */
    public function getSpecificPriceDataById($id)
    {
    }
    /**
     * Delete a specific price.
     *
     * @param int $id_specific_price
     *
     * @return array error & status
     */
    public function deleteSpecificPrice($id_specific_price)
    {
    }
    /**
     * Get price priority.
     *
     * @param int|null $idProduct
     *
     * @return array
     */
    public function getPricePriority($idProduct = null)
    {
    }
    /**
     * Process customization collection.
     *
     * @param object $product
     * @param array $data
     *
     * @return array<int, int>
     */
    public function processProductCustomization($product, $data)
    {
    }
    /**
     * Update product download.
     *
     * @param object $product
     * @param array $data
     *
     * @return ProductDownload
     */
    public function updateDownloadProduct($product, $data)
    {
    }
    /**
     * Delete file from a virtual product.
     *
     * @param object $product
     */
    public function processDeleteVirtualProductFile($product)
    {
    }
    /**
     * Delete a virtual product.
     *
     * @param object $product
     */
    public function processDeleteVirtualProduct($product)
    {
    }
    /**
     * Add attachement file.
     *
     * @param object $product
     * @param array $data
     * @param array $locales
     *
     * @return object|null Attachement
     */
    public function processAddAttachment($product, $data, $locales)
    {
    }
    /**
     * Process product attachments.
     *
     * @param object $product
     * @param array $data
     */
    public function processAttachments($product, $data)
    {
    }
    /**
     * Update images positions.
     *
     * @param array $data Indexed array with id product/position
     */
    public function ajaxProcessUpdateImagePosition($data)
    {
    }
    /**
     * Update image legend and cover.
     *
     * @param int $idImage
     * @param array $data
     *
     * @return object image
     */
    public function ajaxProcessUpdateImage($idImage, $data)
    {
    }
    /**
     * Generate preview URL.
     *
     * @param object $product
     * @param bool $preview
     *
     * @return string|bool Preview url
     */
    public function getPreviewUrl($product, $preview = true)
    {
    }
    /**
     * Generate preview URL deactivate.
     *
     * @param string $preview_url
     *
     * @return string preview url deactivate
     */
    public function getPreviewUrlDeactivate($preview_url)
    {
    }
    /**
     * Generate preview URL.
     *
     * @param int $productId
     *
     * @return string preview url
     */
    public function getPreviewUrlFromId($productId)
    {
    }
}
