<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * StockManager : implementation of StockManagerInterface.
 *
 * @deprecated since 9.0 and will be removed in 10.0, stock is now managed by new logic
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
