<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * Class ProductSaleCore.
 */
class ProductSaleCore
{
    /**
     * Fill the `product_sale` SQL table with data from `order_detail`.
     *
     * @return bool True on success
     */
    public static function fillProductSales()
    {
    }
    /**
     * Get number of actives products sold.
     *
     * @return int number of actives products listed in product_sales
     */
    public static function getNbSales()
    {
    }
    /**
     * Get required informations on best sales products.
     *
     * @param int $idLang Language id
     * @param int $pageNumber Start from (optional)
     * @param int $nbProducts Number of products to return (optional)
     *
     * @return array|bool
     */
    public static function getBestSales($idLang, $pageNumber = 0, $nbProducts = 10, $orderBy = \null, $orderWay = \null)
    {
    }
    /**
     * Get required informations on best sales products.
     *
     * @param int $idLang Language id
     * @param int $pageNumber Start from (optional)
     * @param int $nbProducts Number of products to return (optional)
     *
     * @return bool|array keys : id_product, link_rewrite, name, id_image, legend, sales, ean13, upc, link
     */
    public static function getBestSalesLight($idLang, $pageNumber = 0, $nbProducts = 10, ?\Context $context = \null)
    {
    }
    /**
     * Add Product sale.
     *
     * @param int $productId Product ID
     * @param int $qty Quantity
     *
     * @return bool Indicates whether the sale was successfully added
     */
    public static function addProductSale($productId, $qty = 1)
    {
    }
    /**
     * Get number of sales.
     *
     * @param int $idProduct Product ID
     *
     * @return int Number of sales for the given Product
     */
    public static function getNbrSales($idProduct)
    {
    }
    /**
     * Remove a Product sale.
     *
     * @param int $idProduct Product ID
     * @param int $qty Quantity
     *
     * @return bool Indicates whether the product sale has been successfully removed
     */
    public static function removeProductSale($idProduct, $qty = 1)
    {
    }
}
