<?php

namespace PrestaShop\PrestaShop\Adapter\Product;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * This class will provide data from DB / ORM about Product, for both Front and Admin interfaces.
 */
class ProductDataProvider
{
    /**
     * Get a new ProductCore instance.
     *
     * @param int|null $idProduct
     *
     * @return Product
     */
    public function getProductInstance($idProduct = null)
    {
    }
    /**
     * Get a product.
     *
     * @param int $id_product
     * @param bool $full
     * @param int|null $id_lang
     * @param int|null $id_shop
     * @param object|null $context
     *
     * @throws \LogicException If the product id is not set
     *
     * @return Product $product
     */
    public function getProduct($id_product, $full = false, $id_lang = null, $id_shop = null, $context = null)
    {
    }
    /**
     * Get default taxe rate product.
     *
     * @return int id tax rule group
     */
    public function getIdTaxRulesGroup()
    {
    }
    /**
     * Get product quantity.
     *
     * @param int $id_product
     * @param int|null $id_product_attribute
     * @param bool|null $cache_is_pack
     *
     * @return int stock
     */
    public function getQuantity($id_product, $id_product_attribute = null, $cache_is_pack = null)
    {
    }
    /**
     * @param int $id_product
     * @param int $id_product_attribute Optional
     *
     * @return string
     */
    public function getLocation($id_product, $id_product_attribute = 0)
    {
    }
    /**
     * Get associated images to product.
     *
     * @param int $id_product
     * @param int $id_lang
     *
     * @return array
     */
    public function getImages($id_product, $id_lang)
    {
    }
    /**
     * Get an image.
     *
     * @param int $id_image
     *
     * @return array()
     */
    public function getImage($id_image)
    {
    }
}
