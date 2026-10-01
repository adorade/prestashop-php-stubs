<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
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
     * @return array|bool from Product::getProductProperties
     *                    `false` if failure
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
    public static function getBestSalesLight($idLang, $pageNumber = 0, $nbProducts = 10, \Context $context = \null)
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
