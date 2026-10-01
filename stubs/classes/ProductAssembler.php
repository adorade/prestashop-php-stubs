<?php

/**
 * This class is responsible for enriching product data by all required fields
 * in a performant way, before it goes into ProductLazyArray or ProductListingLazyArray.
 *
 * If you want to enrich a whole list of products, use assembleProducts method to get the data in one query.
 *
 * Currently, the data is passing through Product::getProductProperties also, but this step should be removed
 * and all data from getProductProperties loaded on demand in the lazy arrays.
 */
class ProductAssemblerCore
{
    /**
     * ProductAssemblerCore constructor.
     *
     * @param Context $context
     */
    public function __construct(\Context $context)
    {
    }
    /**
     * Get basic product data for single product.
     * The only required property is id_product.
     * If some data were already provided in $rawProduct, it won't be overwritten.
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
     * If some data were already provided in $rawProducts, it won't be overwritten.
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
