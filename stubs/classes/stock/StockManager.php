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
 * StockManager : implementation of StockManagerInterface.
 *
 * @since 1.5.0
 */
class StockManagerCore implements \StockManagerInterface
{
    /**
     * @see StockManagerInterface::isAvailable()
     */
    public static function isAvailable()
    {
    }
    /**
     * @see StockManagerInterface::addProduct()
     *
     * @param int $id_product
     * @param int $id_product_attribute
     * @param Warehouse $warehouse
     * @param int $quantity
     * @param int|null $id_stock_mvt_reason
     * @param float $price_te
     * @param bool $is_usable
     * @param int|null $id_supply_order
     * @param Employee|null $employee
     *
     * @return bool
     *
     * @throws PrestaShopException
     */
    public function addProduct($id_product, $id_product_attribute, \Warehouse $warehouse, $quantity, $id_stock_mvt_reason, $price_te, $is_usable = \true, $id_supply_order = \null, $employee = \null)
    {
    }
    /**
     * @see StockManagerInterface::removeProduct()
     *
     * @param int $id_product
     * @param int|null $id_product_attribute
     * @param Warehouse $warehouse
     * @param int $quantity
     * @param int $id_stock_mvt_reason
     * @param bool $is_usable
     * @param int|null $id_order
     * @param int $ignore_pack
     * @param Employee|null $employee
     *
     * @return array|bool
     *
     * @throws PrestaShopException
     */
    public function removeProduct($id_product, $id_product_attribute, \Warehouse $warehouse, $quantity, $id_stock_mvt_reason, $is_usable = \true, $id_order = \null, $ignore_pack = 0, $employee = \null)
    {
    }
    /**
     * @see StockManagerInterface::getProductPhysicalQuantities()
     */
    public function getProductPhysicalQuantities($id_product, $id_product_attribute, $ids_warehouse = \null, $usable = \false)
    {
    }
    /**
     * @see StockManagerInterface::getProductRealQuantities()
     */
    public function getProductRealQuantities($id_product, $id_product_attribute, $ids_warehouse = \null, $usable = \false)
    {
    }
    /**
     * @see StockManagerInterface::transferBetweenWarehouses()
     */
    public function transferBetweenWarehouses($id_product, $id_product_attribute, $quantity, $id_warehouse_from, $id_warehouse_to, $usable_from = \true, $usable_to = \true)
    {
    }
    /**
     * @see StockManagerInterface::getProductCoverage()
     * Here, $coverage is a number of days
     *
     * @return int number of days left (-1 if infinite)
     */
    public function getProductCoverage($id_product, $id_product_attribute, $coverage, $id_warehouse = \null)
    {
    }
    /**
     * For a given stock, calculates its new WA(Weighted Average) price based on the new quantities and price
     * Formula : (physicalStock * lastCump + quantityToAdd * unitPrice) / (physicalStock + quantityToAdd).
     *
     * @param Stock $stock
     * @param int $quantity
     * @param float $price_te
     *
     * @return float
     */
    protected function calculateWA(\Stock $stock, $quantity, $price_te)
    {
    }
    /**
     * For a given product, retrieves the stock collection.
     *
     * @param int $id_product
     * @param int $id_product_attribute
     * @param int $id_warehouse Optional
     * @param float|int|null $price_te Optional
     *
     * @return PrestaShopCollection Collection of Stock
     */
    protected function getStockCollection($id_product, $id_product_attribute, $id_warehouse = \null, $price_te = \null)
    {
    }
    /**
     * For a given product, retrieves the stock in function of the delivery option.
     *
     * @param int $id_product
     * @param int $id_product_attribute optional
     * @param array $delivery_option
     *
     * @return bool|int quantity
     */
    public static function getStockByCarrier($id_product = 0, $id_product_attribute = 0, $delivery_option = \null)
    {
    }
}
