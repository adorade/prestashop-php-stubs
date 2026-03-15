<?php

/**
 * Class ProductAssemblerCore.
 */
class ProductAssemblerCore
{
    /**
     * ProductAssemblerCore constructor.
     *
     * @param \Context $context
     */
    public function __construct(\Context $context)
    {
    }
    /**
     * Get basic product data for single product.
     * The only required property is id_product.
     *
     * @param array $rawProduct
     *
     * @return mixed
     *
     * @throws PrestaShopDatabaseException
     */
    public function assembleProduct(array $rawProduct)
    {
    }
    /**
     * Get basic product data for multiple products.
     * The only required property for each product is id_product.
     *
     * @param array $rawProducts Array with multiple products
     *
     * @return mixed
     *
     * @throws PrestaShopDatabaseException
     */
    public function assembleProducts(array $rawProducts)
    {
    }
}
