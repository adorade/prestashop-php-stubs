<?php

namespace PrestaShop\PrestaShop\Core\Stock;

/**
 * Class StockManager Refactored features about product stocks.
 */
class StockManager
{
    /**
     * This will update a Pack quantity and will decrease the quantity of containing Products if needed.
     *
     * @param Product $product A product pack object to update its quantity
     * @param StockAvailable $stock_available the stock of the product to fix with correct quantity
     * @param int $delta_quantity The movement of the stock (negative for a decrease)
     * @param int|null $id_shop Optional shop ID
     */
    public function updatePackQuantity($product, $stock_available, $delta_quantity, $id_shop = null)
    {
    }
    /**
     * This will decrease (if needed) Packs containing this product
     * (with the right declination) if there is not enough product in stocks.
     *
     * @param Product $product A product object to update its quantity
     * @param int $id_product_attribute The product attribute to update
     * @param StockAvailable $stock_available the stock of the product to fix with correct quantity
     * @param int|null $id_shop Optional shop ID
     */
    public function updatePacksQuantityContainingProduct($product, $id_product_attribute, $stock_available, $id_shop = null)
    {
    }
    /**
     * Will update Product available stock int he given declinaison. If product is a Pack, could decrease the sub products.
     * If Product is contained in a Pack, Pack could be decreased or not (only if sub product stocks become not sufficient).
     *
     * @param Product $product The product to update its stockAvailable
     * @param int $id_product_attribute The declinaison to update (null if not)
     * @param int $delta_quantity The quantity change (positive or negative)
     * @param int|null $id_shop Optional
     * @param bool $add_movement Optional
     * @param array $params Optional
     */
    public function updateQuantity($product, $id_product_attribute, $delta_quantity, $id_shop = null, $add_movement = false, $params = [])
    {
    }
    /**
     * @param Product $product
     * @param int $id_product_attribute
     * @param int $newQuantity
     *
     * @return bool
     */
    protected function checkIfMustSendLowStockAlert($product, $id_product_attribute, $newQuantity)
    {
    }
    /**
     * @param Product $product
     * @param int $newQuantity
     *
     * @return bool
     */
    protected function isProductQuantityUnderAlertThreshold($product, $newQuantity)
    {
    }
    /**
     * @param Combination $combination
     * @param int $newQuantity
     *
     * @return bool
     */
    protected function isCombinationQuantityUnderAlertThreshold(\Combination $combination, $newQuantity)
    {
    }
    /**
     * @param Product $product
     * @param int $id_product_attribute
     * @param int $newQuantity
     *
     * @throws \Exception
     * @throws \PrestaShopException
     */
    protected function sendLowStockAlert($product, $id_product_attribute, $newQuantity)
    {
    }
    /**
     * Public method to save a Movement.
     *
     * @param int $productId
     * @param int $productAttributeId
     * @param int $deltaQuantity
     * @param array $params
     *
     * @return bool
     */
    public function saveMovement($productId, $productAttributeId, $deltaQuantity, $params = [])
    {
    }
}
